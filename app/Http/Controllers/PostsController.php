<?php

namespace App\http\Controllers;

class PostsController
{

  public function show($post)
  {
    $posts = [
      1 => "This is the first post",
      2 => "This is the second post"
    ];

    if (!array_key_exists($post, $posts)) {
      abort(404, 'Sorry, post does not exist!');
    }

    return view('post', [
      'post' => $posts[$post]
    ]);
  }
}
