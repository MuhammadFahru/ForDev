<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class UserController extends Controller
{
    public function profile()
    {
        $data['post'] = Post::latest()->get();
        return view('user.profile', $data);
    }
}
