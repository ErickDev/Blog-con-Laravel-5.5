<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(5);
        return view('home', compact('posts'));
    }

    public function post($slug){
        $post = Post::where('slug', $slug)->first();
        return view('posts.post', compact('post'));
    }

    public function category($slug){
        $category = Category::where('slug', $slug)->pluck('id')->first(); // pluck devuelve solo el id
        $posts = Post::where('category_id', $category)
                            ->orderBy('id', 'DESC')
                            ->where('status', 'PUBLISHED')
                            ->paginate(5);
        return view('home', compact('posts'));
    }

    public function tag($slug){
        
        $posts = Post::whereHas('tags', function($query) use($slug){
            $query->where('slug', $slug);
        })->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(5);
        return view('home', compact('posts'));
    }
}
