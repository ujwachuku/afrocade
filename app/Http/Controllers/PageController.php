<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // Set array variable to null
    	$articles = [];

        // Get categories from db where there are at least three posts and group them for display on home page
        $categories = Category::orderBy('name', 'asc')->take(12)->get();

        foreach ($categories as $category) 
        {
        	// Go to db, count number of posts in category
        	$articlesInCategory = $category->posts()->where('status', 'PUBLISHED')->take(4)->get();

        	if (count($articlesInCategory) >= 3) 
        	{
        		$articles[$category->name] = $articlesInCategory;
        	}
        }        

        return view('home.index', compact('articles', 'categories'));
    }    
}
