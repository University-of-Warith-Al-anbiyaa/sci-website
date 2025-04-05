<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class NewsController extends Controller
{
    protected function getApiUrl()
    {
        $lang = session('locale') ?? 'ar';
        $path = $lang === 'ar' ? 'arabic' : 'english';
        return "https://uowa.edu.iq/{$path}/api/unidep-news";
    }

    protected function getPageUrl()
    {
        $lang = session("locale");
        $path = $lang === 'ar' ? 'arabic' : 'english';
        return "https://uowa.edu.iq/{$path}/api/news-get";
    }

    protected function getApiUrl_unidep_slider()
    {
        $lang = session('locale');
        $path = $lang === 'ar' ? 'arabic' : 'english';
        return "https://uowa.edu.iq/{$path}/api/unidep-slider";
    }

    protected $token = '1551d88e36f2d38f6d750c26cb3c696cad5cd1809fdcfd9efd6f3698996cadb1';

    /**
     * Display a listing of the news.
     */
    public function index()
    {
        if(!session('locale'))
        {
            session()->put('locale', 'ar');
        }
        $lang = session('locale');
        // return response()->json([
        //     'success' => true,
        //     'message' => 'News data fetched successfully',
        //     'data' => $this->getApiUrl(),
        //     'f'=> $lang
        // ]);
        try {
            $news = $this->fetchNewsData();
            $slider = $this->fetch_unidep_sliderData();
            // return response()->json([
            //     'success' => true,
            //     'data' => $slider
            // ]);
            return view('front.index', compact('news', 'slider'));
        } catch (\Exception $e) {
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Failed to fetch news: ' . $e->getMessage()
            // ], 500);
            return response()->view('errors.custom-error', [], 500);
        }
    }

    /**
     * Show the specified news item.
     */
    public function show($id)
    {
        // return dd($id);
        try {
            // Make API request to get news details
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token
            ])->asForm()->post($this->getPageUrl(), [
                'id' => $id
            ]);

            if (!$response->successful()) {
                // return response()->json($response->json());
                return back()->with('error', 'حدث خطأ أثناء جلب تفاصيل الخبر');
            }

            $newsItem = $response->json();
            // return response()->json($newsItem) ;
            return view('news.show', compact('newsItem'));

        } catch (\Exception $e) {
            // return response()->json($e);
            // return back()->with('error', 'حدث خطأ في النظام: ' . $e->getMessage());
            return response()->view('errors.custom-error', [], 500);

        }
    }

    /**
     * Store news data from API.
     */
    public function store(Request $request)
    {
        try {
            $newsData = $request->all();
            Session::put('newsdata', $newsData);
            
            return response()->json([
                'success' => true,
                'message' => 'News data stored successfully'
            ]);
        } catch (\Exception $e) {
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Failed to store news data: ' . $e->getMessage()
            // ], 500);
            return response()->view('errors.custom-error', [], 500);

        }
    }

    /**
     * Fetch news data from external API.
     */
    private function fetchNewsData()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token
        ])->get($this->getApiUrl(), [  // Changed this line to use getApiUrl()
            'category' => 'news',
            'dep_id' => 5
        ]);

        if (!$response->successful()) {
            throw new \Exception('API request failed with status: ' . $response->status());
        }

        $data = $response->json();
        Session::put('newsdata', $data);
        
        return $data;
    }

    private function fetch_unidep_sliderData()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token
        ])->get($this->getApiUrl_unidep_slider(), [  // Changed this line to use getApiUrl()
            'dep_id' => 5
        ]);

        if (!$response->successful()) {
            throw new \Exception('API request failed with status: ' . $response->status());
        }

        $data = $response->json();
        // Session::put('newsdata', $data);
        
        return $data;
    }


     public function news(Request $request)
    {
        try {
            $page = $request->get('page', 1);
            $slider = $this->fetch_unidep_sliderData();
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token
            ])->get($this->getApiUrl(), [
                'category' => 'news',
                'dep_id' => 5,
                'page' => $page,
                'per_page' => 9  // Number of items per page
            ]);

            if (!$response->successful()) {
                throw new \Exception('API request failed with status: ' . $response->status());
            }
        //    return response()->json($response->json());
            $news = $response->json();
            return view('news.index', [
                'news' => $news,
                'slider' => $slider,
                'pagination' => [
                    'current_page' => $news['current_page'] ?? $page,
                    'last_page' => $news['last_page'] ?? 1,
                    'per_page' => $news['per_page'] ?? 9,
                    'total' => $news['total'] ?? count($news['data']),
                ]
            ]);
        } catch (\Exception $e) {
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Failed to fetch news: ' . $e->getMessage()
            // ], 500);
            return response()->view('errors.custom-error', [], 500);

        }
    }


    /**
     * Update cached news data.
     */
    public function refresh()
    {
        try {
            $newsData = $this->fetchNewsData();
            return response()->json([
                'success' => true,
                'data' => $newsData
            ]);
        } catch (\Exception $e) {
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Failed to refresh news data: ' . $e->getMessage()
            // ], 500);
            return response()->view('errors.custom-error', [], 500);

        }
    }
}
