<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

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
        return view('user.posts.index');
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
    public function store(Request $request)
    {                
        $attr = $this->validateRequest();
        $slug = \Str::slug($request->judul). '-' . \Str::random(8);
        $attr['slug'] = $slug;

        $thumbnail = request()->file('thumbnail')->store("posts/thumbnail");
        $attr['thumbnail'] = $thumbnail;

        $attr['category_id'] = request('category');


        $post = Post::create($attr);
        $post->tags()->attach(request('tags'));

        if($post) {
            return redirect('/')->with('success', 'Thread Berhasil Dibuat');
        }else {
            return redirect('/')->with('error', 'Thread Tidak Berhasil Dibuat');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('user.posts.show');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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

    public function validateRequest() {
        return request()->validate([
            'thumbnail' => 'mimes:jpeg,png|max:1014',
            'judul' => 'required|min:3',
            'konten' => 'required|min:10',
            'category' => 'required',
            'tags' => 'required|array'
        ]);
    }
}
