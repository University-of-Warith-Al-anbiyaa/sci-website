<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlagiarismController extends Controller
{
    protected $token = '1551d88e36f2d38f6d750c26cb3c696cad5cd1809fdcfd9efd6f3698996cadb1';

    protected function getApiUrl()
    {
        $lang = session('locale');
        $path = $lang === 'ar' ? 'arabic' : 'english';
        return "https://uowa.edu.iq/{$path}/api/clc-new-plag";
    }

    public function index()
    {
        $form_data = $this->getFormData();
        if($form_data){
            return view('plagiarism.index', compact('form_data'));
        }else{
          return abort(404,'توجد مشكلة في الاتصال يرجى اعادة تحميل الصفحة بعد فحص الاتصال بالخدمة');
        }
        
    }

    private function getFormData()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token
        ])->get($this->getApiUrl());

        if (!$response->successful()) {
            return abort(404,'توجد مشكلة في الاتصال يرجى اعادة تحميل الصفحة بعد فحص الاتصال بالخدمة');
            // throw new \Exception('API request failed with status: ' . $response->status());
        }

        return $response->json();
    }

    public function store(Request $request)
    {
        // Build base form data - same for all cases
        // return $request->all();
        $formData = [
            'action' => 'save-plag',
            'title' => $request->input('title'),
            'collage' => $request->input('collage'),
            'department' => $request->input('department')
        ];

        // Handle university and conditional fields
        if ($request->input('affiliation') === 'uow') {
            $formData['university'] = 'uow';
            $formData['code'] = $request->input('code');
        } else {
            $formData['university'] = $request->input('selected_university');
            $formData['name'] = $request->input('name');
            $formData['email'] = $request->input('email');
            $formData['phone'] = $request->input('phone');

            if ($request->input('selected_university') === 'other') {
                $formData['current_uni'] = $request->input('current_uni');
            }
            if ($request->hasFile('receipt_photo')) {
                $formData['receipt_photo'] = $request->file('receipt_photo');
            }
        }

        // Add files to request
        if ($request->hasFile('doc_file')) {
            $formData['doc_file'] = $request->file('doc_file');
        }

        

        try {
            $http = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token
            ]);

            // Attach doc_file
            $http->attach(
                'doc_file',
                file_get_contents($request->file('doc_file')),
                $request->file('doc_file')->getClientOriginalName()
            );

            // Attach receipt_photo if not UOW
            if ($request->input('affiliation') !== 'uow' && $request->hasFile('receipt_photo')) {
                $http->attach(
                    'receipt_photo',
                    file_get_contents($request->file('receipt_photo')),
                    $request->file('receipt_photo')->getClientOriginalName()
                );
            }

            $response = $http->post($this->getApiUrl(), $formData);

            if ($response->successful()) {
                session()->flash('success', 'تم تقديم طلب فحص الاستلال بنجاح');
                return redirect()->route('plagiarism.index');
            }

            // For debugging
            // return response()->json([
            //     'status' => $response->status(),
            //     'body' => $response->body(),
            //     'formData' => $formData
            // ]);
            session()->flash('error', 'حدث خطأ أثناء تقديم الطلب: ' . $response->body());
            return redirect()->route('plagiarism.index');

        } catch (\Exception $e) {
            // \Log::error('Plagiarism submission error:', [
            //     'error' => $e->getMessage(),
            //     'trace' => $e->getTraceAsString(),
            //     'formData' => $formData
            // ]);

            session()->flash('error', 'حدث خطأ أثناء تقديم الطلب: ' . $response->body());
            return redirect()->route('plagiarism.index');        }
    }
}
