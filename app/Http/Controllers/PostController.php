<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidationPost;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Alert;

class PostController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['post'] = Post::latest()->get();
        $data['categories'] = Category::get();
        $data['tags'] = Tag::get();
        return view('user.posts.index', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
        $data['post'] = $post;
        $data['categories'] = Category::get();
        $data['tags'] = Tag::get();
        return view('user.posts.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationPost $request)
    {                
        $attr = $request->all();
        $slug = \Str::slug($request->judul). '-' . \Str::random(8);
        $attr['slug'] = $slug;

        $thumbnail = request()->file('thumbnail')->store("thumbnail_thread");
        $attr['thumbnail'] = $thumbnail;

        $attr['category_id'] = request('category');

        $post = auth()->user()->posts()->create($attr);
        $post->tags()->attach(request('tags'));

        if($post) {
            Alert::success('Success','Thread Berhasil Dibuat');
            return redirect('/profile/user');
        }else {
            Alert::error('Error','Thread Tidak Berhasil Dibuat');
            return redirect('/profile/user');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $data['post'] = $post;
        $data['categories'] = Category::get();
        $data['tags'] = Tag::get();
        return view('user.posts.edit', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $data['post'] = $post;
        $data['categories'] = Category::get();
        $data['tags'] = Tag::get();
        return view('user.posts.show', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidationPost $request, Post $post)
    {
        if(request()->file('thumbnail')) {
            \Storage::delete($post->thumbnail);
            $thumbnail = request()->file('thumbnail')->store("thumbnail_thread");
        } else {
            $thumbnail = $post->thumbnail;
        }
        $attr = $request->all();
        $attr['category_id'] = request('category');
        $attr['thumbnail'] = $thumbnail;
        $post->update($attr);
        $post->tags()->sync(request('tags'));
        if($post) {
            Alert::success('Success','Thread Berhasil Diupdate');
            return redirect('/profile/user');
        }else {
            Alert::error('Error','Thread Tidak Berhasil Diupdate');
            return redirect('/profile/user');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        \Storage::delete($post->thumbnail);
        $post->tags()->detach();
        $post->delete();
        if($post) {
            Alert::success('Success','Thread Berhasil Dihapus');
            return redirect('/profile/user');
        }else {
            Alert::error('Error','Thread Tidak Berhasil Dihapus');
            return redirect('/profile/user');
        }
    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('upload')->move(public_path('img/fileEditor'), $fileName);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('img/fileEditor/'.$fileName); 
            $msg = 'File uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }
}
