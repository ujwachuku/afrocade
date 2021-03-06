<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::orderBy('order', 'desc')->get();
        $category = '';

        if ($request->has('q')) 
        {
            $search = true;

            $query = trim($request->input('q'));
            
            $articles = Post::where('status', 'PUBLISHED')
                ->where('title', 'LIKE', '%'.$query.'%')
                ->latest()
                ->paginate(12);
            

            return view('posts.index', compact('categories', 'articles', 'search', 'query', 'category'));
        }
        else
        {
            $search = false;

            $articles = Post::where('status', 'PUBLISHED')->latest()->paginate(12);
        }        

        return view('posts.index', compact('categories', 'articles', 'search', 'category'));
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

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();

        $articles = Post::where('status', 'PUBLISHED')
            ->where('category_id', $category->id)
            ->latest()
            ->paginate(12);

        $search = false;     

        return view('posts.index', compact('category', 'articles', 'search'));
    }
    
}
