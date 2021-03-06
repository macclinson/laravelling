<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Carbon\Carbon;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {

      $posts = Post::latest();

      if($month = request('month')){
          $posts->whereMonth('created_at', Carbon::parse($month)->month);
      }

      if($year = request('year')){
          $posts->whereYear('created_at', Carbon::parse($year)->year);
      }

      $posts = $posts->get();


      return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {

        return view('posts.show', compact('post'));
    }

    public function create()
    {
      return view('posts.create');
    }

    public function store()
    {
      $this->validate(request(), [
        'title' => 'required',
        'body' => 'required'
      ]);

      // dd(Post::latest()->get());

      Post::create([
        'title' => request('title'),
        'body' => request('body'),
        'user_id' => auth()->id()
      ]);
      session()->flash('message', 'Your post will be reviewed and published');

      return redirect('/');

    }

}
