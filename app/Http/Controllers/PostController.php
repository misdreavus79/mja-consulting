<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    //display post by slug
    public function display($slug)
    {
    	$post = Post::where('slug', $slug);

    	return view('post', ['page_title' => $post->title, 'post' => $post]);
    }

    //create new post
    public function create()
    {
    	
    }

    //edit existing post
    public function update()
    {
    	
    }

    public function delete(){

    }
}
