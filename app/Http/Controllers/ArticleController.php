<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name', 'desc')->get();

        $articles = Post::where('status', 'published')->latest()->paginate(15);

        return view('posts.index', compact('categories', 'articles'));
    }

    public function show($slug)
    {
        $article = Post::where('slug', $slug)
            ->where('status', 'published')
            ->first();

        $upSells = Post::inRandomOrder()
            ->where('status', 'published')
            ->where('slug', '!=', $slug)            
            ->take(4)
            ->get();

        return view('posts.post', compact('article', 'upSells'));
    }
    
}
