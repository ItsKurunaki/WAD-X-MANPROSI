<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::where('status', true)
            ->orderBy('published_at', 'desc')
            ->paginate(6);
            
        return view('index', compact('news'));
    }
}