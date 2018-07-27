<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name', 'asc')->take(12)->get();

        $articles = Post::where('status', 'published')->latest()->paginate(12);

        return view('home.index', compact('articles', 'categories'));
    }    
}
