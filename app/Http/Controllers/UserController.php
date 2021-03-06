<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class UserController extends Controller
{
    public function profile(Post $posts)
    {
        $data['post'] = $posts->where('user_id', auth()->user()->id)->latest()->get();
        return view('user.profile', $data);
    }
}
