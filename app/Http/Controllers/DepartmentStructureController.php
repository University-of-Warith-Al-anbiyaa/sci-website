<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class DepartmentStructureController extends Controller
{
    protected function getApiUrl()
    {
        $lang = session('locale');
        $path = $lang === 'ar' ? 'arabic' : 'english';
        return "https://uowa.edu.iq/{$path}/api/unidep-news";
    }

    protected $token = '1551d88e36f2d38f6d750c26cb3c696cad5cd1809fdcfd9efd6f3698996cadb1';

    public function index()
    {
        $departments = $this->fetchNewsData();

        return view('department_structure.index', compact('departments'));
    }

    /**
     * Fetch news data from external API.
     */
    private function fetchNewsData()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token
        ])->get($this->getApiUrl(), [  // Changed this line to use getApiUrl()
            'category' => 'dep-structure',
            'dep_id' => 5
        ]);

        if (!$response->successful()) {
            throw new \Exception('API request failed with status: ' . $response->status());
        }

        $data = $response->json();
        
        return $data;
    }
}
