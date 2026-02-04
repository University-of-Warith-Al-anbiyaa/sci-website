<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class DepartmentStructureController extends Controller
{

    public function __construct()
    {
        if (session('locale')) {
            app()->setLocale(session('locale'));
        }else {
            app()->setLocale('ar'); // Default to Arabic if no locale is set
            session(['locale' => 'ar']);
        }
        //
    }
    protected function getApiUrl()
    {
        $lang = session('locale') ?? 'ar';
        $path = $lang === 'ar' ? 'arabic' : 'english';
        return "https://uowa.edu.iq/{$path}/api/unidep-news";
    }

    protected $token = '1551d88e36f2d38f6d750c26cb3c696cad5cd1809fdcfd9efd6f3698996cadb1';

    public function index()
    {
        $departments = $this->dep_structureData();

        return view('Department_Structure.index', compact('departments'));
    }

    /**
     * Fetch news data from external API.
     */
    private function dep_structureData()
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

    public function department_vision()
    {
        $department_vision = $this->department_visionData();

        // return response()->json($department_vision);
        return view('Department_Structure.department_vision', compact('department_vision'));
    }

    private function department_visionData()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token
        ])->get($this->getApiUrl(), [  // Changed this line to use getApiUrl()
            'category' => 'department-vision',
            'dep_id' => 5
        ]);

        if (!$response->successful()) {
            throw new \Exception('API request failed with status: ' . $response->status());
        }

        $data = $response->json();
        
        return $data;
    }

    public function vision_section()
    {
        $vision_section = $this->dep_sectionData();

        $data = $vision_section['data'] ?? [];
        // return response()->json($vision_section['data']);
        return view('Department_Structure.vision_section', compact('vision_section','data'));
    }

    private function dep_sectionData()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token
        ])->get($this->getApiUrl(), [  // Changed this line to use getApiUrl()
            'category' => 'dep-speech',
            'dep_id' => 5
        ]);
        if (!$response->successful()) {
            throw new \Exception('API request failed with status: ' . $response->status());
        }   
        $data = $response->json();
        return $data;
    }
    // private function vision_sectionData()
    // {
    //     $response = Http::withHeaders([
    //         'Authorization' => 'Bearer ' . $this->token
    //     ])->get($this->getApiUrl(), [  // Changed this line to use getApiUrl()
    //         'category' => 'dep-speech',
    //         'dep_id' => 5
    //     ]);

    //     $data = [];
    //     if (!$response->successful()) {
    //         $data = $data
    //         throw new \Exception('API request failed with status: ' . $response->status());
    //     }

    //     $data = $response->json();
        
    //     return $data;
    // }

    public function about_department()
    {
        $about_department = $this->about_departmentData();

        // Extract the 'data' key from the API response (fallback to empty array)
        $about_department = $about_department['data'] ?? [];
        // If API returned a list, use the first item; otherwise keep as-is
        $about_department = $about_department[0] ?? $about_department;

        // Extract fields into variables (fallback to null)
        $id = $about_department['id'] ?? null;
        $arttitle = $about_department['arttitle'] ?? null;
        $slag = $about_department['slag'] ?? null;
        $ctitle = $about_department['ctitle'] ?? null;
        $photo = $about_department['photo'] ?? null;
        $content = $about_department['content'] ?? null;
        $created = $about_department['created'] ?? null;

        // Optionally replace $about_department with the single item (keeps existing view compact)
        $about_department = [
            'id' => $id,
            'arttitle' => $arttitle,
            'slag' => $slag,
            'ctitle' => $ctitle,
            'photo' => $photo,
            'content' => $content,
            'created' => $created,
        ];

        // return response()->json($about_department);

        return view('Department_Structure.about_department1', compact('about_department'));
    }

    private function about_departmentData()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token
        ])->get($this->getApiUrl(), [  // Changed this line to use getApiUrl()
            'category' => 'about-department',
            'dep_id' => 5
        ]);

        if (!$response->successful()) {
            throw new \Exception('API request failed with status: ' . $response->status());
        }

        $data = $response->json();
        
        return $data;
    }
}
