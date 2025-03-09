<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CertificateController extends Controller
{
    protected $token = '1551d88e36f2d38f6d750c26cb3c696cad5cd1809fdcfd9efd6f3698996cadb1';

    protected function getApiUrl()
    {
        $lang = session('locale');
        $path = $lang === 'ar' ? 'arabic' : 'english';
        return "https://uowa.edu.iq/{$path}/api/certificate";
    }

    public function index()
    {
        return view('certificates.index');
    }

    public function search(Request $request)
    {
        // Prepare form data
        $formData = [
            'name' => $request->input('name')
        ];

        try {
            // Make API request
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token
            ])->asForm()->post($this->getApiUrl(), $formData);

            // Handle successful response
            if ($response->successful()) {
                $certificates = $response->json() ?? [];

                // Transform dates and format data if needed
                $certificates = collect($certificates)->map(function ($cert) {
                    return [
                        'id' => $cert['id'],
                        'cid' => $cert['cid'],
                        'eid' => $cert['eid'],
                        'title' => $cert['title'],
                        'name' => $cert['name'],
                        'type' => $cert['type'],
                        'num' => $cert['num'],
                        'days' => $cert['days'],
                        'datestart' => date('Y-m-d', $cert['datestart']),
                        'created' => date('Y-m-d', $cert['created']),
                        'orders' => $cert['created'],
                    ];
                })->toArray();

                return response()->json([
                    'success' => true,
                    'certificates' => $certificates
                ]);
            }

            // Handle failed response
            return response()->json([
                'success' => false,
                'message' => 'حدث خطأ أثناء البحث',
                'error_code' => $response->status()
            ], 500);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'حدث خطأ في النظام',
                'debug' => config('app.debug') ? $e->getMessage() : null
            ], 500);
        }
    }

    public function downloadCertificate($id)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token
        ])->get("https://uowa.edu.iq/cp/pdf/certificate/{$id}");

        if (!$response->successful()) {
            return back()->with('error', 'حدث خطأ أثناء تحميل الشهادة');
        }

        return response($response->body())
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'attachment; filename="certificate.pdf"');
    }

    public function downloadOrder($id)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token
        ])->get($this->getApiUrl() . "/order/{$id}");

        if (!$response->successful()) {
            return back()->with('error', 'حدث خطأ أثناء تحميل الأمر الإداري');
        }

        return response($response->body())
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'attachment; filename="order.pdf"');
    }
}
