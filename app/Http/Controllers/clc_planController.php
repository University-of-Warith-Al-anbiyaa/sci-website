<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class clc_planController extends Controller
{
    protected function getApiUrl()
    {
        $lang = session('locale');
        $path = $lang === 'ar' ? 'arabic' : 'english';
        return "https://uowa.edu.iq/{$path}/api/clc-annual-plan";
    }

    protected function getApiUrlclc()
    {
        $lang = session('locale');
        $path = $lang === 'ar' ? 'arabic' : 'english';
        return "https://uowa.edu.iq/{$path}/api/clc-new-course";
    }

    protected $token = '1551d88e36f2d38f6d750c26cb3c696cad5cd1809fdcfd9efd6f3698996cadb1';

    public function index(Request $request)
    {
        $page = $request->get('page', 1);
        $clc_annual_plan = $this->clc_annual_plan($page);

        return view('clc_annual_plan.index', compact('clc_annual_plan'));
    }

    private function clc_annual_plan($page = 1)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token
        ])->get($this->getApiUrl(), [
                    'page' => $page,
                    'per_page' => 25  // Set 25 items per page
                ]);

        if (!$response->successful()) {
            throw new \Exception('API request failed with status: ' . $response->status());
        }

        $data = $response->json();

        // Ensure pagination data exists
        $data['pagination'] = [
            'current_page' => $page,
            'per_page' => 25,
            'last_page' => $data['last_page'] ?? ceil(count($data['data']) / 25),
            'total' => count($data['data'])
        ];

        return $data;
    }

    public function archive()
    {
        $archive = $this->archiveData();

        return view('clc_annual_plan.archive', compact('archive'));
    }

    private function archiveData()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token
        ])->get($this->getApiUrl(), [  // Changed this line to use getApiUrl()
                    'archive' => '1',
                ]);

        if (!$response->successful()) {
            throw new \Exception('API request failed with status: ' . $response->status());
        }

        $data = $response->json();

        return $data;
    }

    public function program()
    {
        $program = $this->programData();

        return view('clc_annual_plan.program', compact('program'));
    }

    private function programData()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token
        ])->get($this->getApiUrl(), [  // Changed this line to use getApiUrl()
                    'type' => 'training',
                ]);

        if (!$response->successful()) {
            throw new \Exception('API request failed with status: ' . $response->status());
        }

        $data = $response->json();

        return $data;
    }

    private function getcreateData()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token
        ])->get($this->getApiUrlclc(), [  // Changed this line to use getApiUrl()
                    'type' => 'training',
                ]);

        if (!$response->successful()) {
            throw new \Exception('API request failed with status: ' . $response->status());
        }

        $data = $response->json();

        return $data;
    }

    public function create()
    {
        $form_data = $this->getcreateData();

        return view('clc_annual_plan.create', compact('form_data'));
    }

    public function store(Request $request)
    {
        // Build base form data - same for all cases
        // return response()->json($request->all());
        $formData = [
            'action' => 'save-course',
            'title' => $request->input('title'),
            'category' => $request->input('category'),
            'type' => $request->input('type'),
            'duration' => $request->input('duration'),
            'service' => $request->input('service'),
            'beneficiary' => $request->input('beneficiary')
        ];

        // Handle affiliate and conditional fields
        if ($request->input('affiliate') === 'uowa') {
            $formData['university'] = 'وارث الأنبياء';
            $formData['name'] = $request->input('name'); // User code
        } else {
            
            $formData['name'] = $request->input('name');
            $formData['email'] = $request->input('email');
            $formData['phone'] = $request->input('phone');
            $formData['prof'] = $request->input('prof');
            $formData['work'] = $request->input('work');

            // Handle university selection
            if ($request->input('university') === 'other') {
                $formData['university'] = 'affiliate';
                $formData['affiliate'] = $request->input('other_university');
            } else {
                $formData['university'] = $request->input('university');
            }
        }

        // Handle category 'other' case
        if ($request->input('category') === 'other') {
            $formData['newcate'] = $request->input('newcate');
        }

        // Handle paid course case
        if ($request->input('type') === 'notfree') {
            $formData['price'] = $request->input('price');
        }

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token
            ])->asForm()->post($this->getApiUrlclc(), $formData);

            if ($response->successful()) {
                if ($response->successful()) {
                    session()->flash('success', 'تم تسجيل الدورة بنجاح');
                    return redirect()->route('plagiarism.index');
                }
            }

            // return response()->json($request->body(), $response->status());
            // For debugging
            // return back()->with([
            //     'error' => 'حدث خطأ أثناء تسجيل الدورة',
            //     'debug' => [
            //         'status' => $response->status(),
            //         'body' => $response->json() ?? $response->body(),
            //         'formData' => $formData
            //     ]
            // ]);
            session()->flash('error', 'حدث خطأ أثناء تسجيل الدورة');
            return redirect()->route('clc_annual_plan.create');

        } catch (\Exception $e) {
            // return response()->json($request->body(), $response->status());

            // \Log::error('Course submission error:', [
            //     'error' => $e->getMessage(),
            //     'trace' => $e->getTraceAsString(),
            //     'formData' => $formData
            // ]);

            // return back()->with([
            //     'error' => 'حدث خطأ في النظام',
            //     'exception' => [
            //         'message' => $e->getMessage(),
            //         'code' => $e->getCode(),
            //         'file' => $e->getFile(),
            //         'line' => $e->getLine()
            //     ]
            // ]);
            session()->flash('error', 'حدث خطأ في النظام');
            return redirect()->route('clc_annual_plan.create');
        }
    }
}
