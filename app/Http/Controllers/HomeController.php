<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'about',
            'index',
            'blog',
            'showBlogDetail',

        ]]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('index', compact('blogs'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function redirToLogin()
    {
        return redirect( route('login' ));
    }

    public function showWelcome()
    {
        //
    }

    public function showBlogDetail($id)
    {
        $post = Post::find($id);
        return view('blogdetail', compact('post'));
    }


}
