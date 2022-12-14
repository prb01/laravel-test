<?php

namespace App\http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Post;

class PostsController
{

  public function show($slug)
  {
    // $post = DB::table('posts')->where('slug', $slug)->first();
    $post = Post::where('slug', $slug)->firstOrFail();

    return view('post', [
      'post' => $post->body
    ]);
  }
}
