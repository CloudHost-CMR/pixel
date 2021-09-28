<?php

namespace App\Http\Controllers;

use App\Models\Work;

class PortFolioController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Portfolio',
            'brandings' => Work::orderBy('created_at', 'desc')
                        ->where('type','BRANDING')
                        ->where('status','PUBLISHED')
                        ->get(),
            "videos" => Work::orderBy('created_at', 'desc')
                        ->where('type','VIDEO')
                        ->where('status','PUBLISHED')
                        ->get(),
            "designs" => Work::orderBy('created_at', 'desc')
                        ->where('type','VIDEO')
                        ->where('status','PUBLISHED')
                        ->get(),
        ];

        return view('pixel.port-folio', $data);
    }

    public function details($slug)
    {
        $data = [
            'title' => 'Port folio Detail',
            'post' => Work::where('slug', $slug)
            ->where('status','PUBLISHED')
            ->firstOrfail()
        ];

        return view('pixel.work-details', $data);
    }

}
