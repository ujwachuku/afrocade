<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use TCG\Voyager;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::orderBy('name', 'desc')->get();
        $category = '';

        if ($request->has('q')) 
        {
            $search = true;

            $query = trim($request->input('q'));
            
            $articles = Post::where('status', 'PUBLISHED')
                ->where('title', 'LIKE', '%'.$query.'%')
                ->latest()
                ->paginate(15);
            

            return view('posts.index', compact('categories', 'articles', 'search', 'query', 'category'));
        }
        else
        {
            $search = false;

            $articles = Post::where('status', 'PUBLISHED')->latest()->paginate(15);
        }        

        return view('posts.index', compact('categories', 'articles', 'search', 'category'));
    }

    public function show($slug)
    {
        $article = Post::where('slug', $slug)
            ->where('status', 'published')
            ->first();

            // dd(Voyager::image($article->thumbnail('cropped')));

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
            ->paginate(15);

        $search = false;     

        return view('posts.index', compact('category', 'articles', 'search'));
    }
    
}
