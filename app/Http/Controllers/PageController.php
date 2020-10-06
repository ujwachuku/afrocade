<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $articles = Post::where('status', 'PUBLISHED')->latest()->get();

        $categories = Category::orderBy('name', 'asc')->take(15)->get();

        return view('home.index', compact('articles', 'categories'));
    }    
}
