<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Catigory;
use App\Models\User;

class PostController extends Controller {


	public function index() {
		
		return view('posts', [
			'posts' => Post::latest()->filter(request(['search']))->get(),
			'catigories' => Catigory::all()
		]);
	}

	public function show(Post $post) {
		return view('post', [
			'post' => $post
		]);
	}


}
