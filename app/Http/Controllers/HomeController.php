<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\Carrousel;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Creative Studio',
            'carrousels' => Carrousel::orderBy('created_at', 'desc')->where('status','PUBLISHED')->limit(3)->get(),
            'brandings' => Work::orderBy('created_at', 'desc')
                        ->where('type','BRANDING')
                        ->where('status','PUBLISHED')
                        ->get(),
            "videos" => Work::orderBy('created_at', 'desc')
                        ->where('type','VIDEO')
                        ->where('status','PUBLISHED')
                        ->get(),
            "designs" => Work::orderBy('created_at', 'desc')
                        ->where('type','DESIGN')
                        ->where('status','PUBLISHED')
                        ->get(),
        ];
        return view('pixel.index', $data);
    }

}  
