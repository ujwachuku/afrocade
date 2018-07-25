<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $articles = Post::where('status', 'published')->latest()->paginate(12);

        return view('home.index', compact('articles'));
    }    
}
