@extends('layouts.app')
@section('content')
    <div class="container">

        <!-- Navigation -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }}" class="inactive-link"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#" class="inactive-link">Thread</a></li>
              <li class="breadcrumb-item"><a href="#" class="inactive-link">{{ $post->category->name }}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($post->judul,66) }}</li>
            </ol>
        </nav>

        <!-- Content -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card p-3 mb-3">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <a href="" class="inactive-link text-secondary mr-3"><i class="fas fa-share-alt"></i> 300</a>
                            <div class="vl mr-3" style="height:25px;"></div>
                            <a href="" class="inactive-link icon whatsapp mr-3"><i class="fab fa-whatsapp"></i></a>
                            <a href="" class="inactive-link icon facebook mr-3"><i class="fab fa-facebook-f"></i></a>
                            <a href="" class="inactive-link icon twitter mr-3"><i class="fab fa-twitter"></i></a>
                            <a href="" class="inactive-link icon gmail mr-3"><i class="fas fa-envelope"></i></a>
                            <a href="" class="inactive-link text-secondary mr-3"><i class="fas fa-link"></i></a>
                            <code>https://kask.us/iHz8V</code>
                        </div>
                        <a href="" class="inactive-link text-secondary"><i class="far fa-bookmark"></i></a>
                    </div>
                </div>
                <div class="card p-3 mb-3">
                    <div class="d-flex justify-content-between mb-3">
                        <div class="row">
                            <div class="col-lg-2">
                                <img src="{{ asset('/img/ava.png') }}" width="110%">
                            </div>
                            <div class="col-lg-8 minleft-1">
                                <p>{{$post->author->name}}</p>
                                <p class="small text-secondary mintop-1">{{ $post->created_at->format('d M Y ') }}</p>
                            </div>
                        </div>
                        <a href="" class="inactive-link text-secondary"><i class="fas fa-ellipsis-h"></i></a>
                    </div>
                    <hr class="mintop-1">
                    <h5 class="mb-3">{{ $post->judul }}</h5>
                    <img src="{{ asset('storage/'.$post->thumbnail) }}" width="100%" class="mb-3">
                    <p>{!! $post->konten !!}</p>
                    <p class="small">Tags : 
                        @foreach ($post->tags as $tag)
                            <a href="">{{ $tag->name }}</a>,
                        @endforeach
                    </p>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <p class="small text-secondary mr-2"><a class="text-secondary inactive-link" href=""><i class="fas fa-thumbs-up"></i></a> 100</p>
                            <p class="small text-secondary"><a class="text-secondary inactive-link" href=""><i class="fas fa-thumbs-down"></i></a> 20</p>
                        </div>
                        <div class="d-flex">
                            <a class="text-secondary inactive-link small mr-3" href=""><i class="fas fa-comments"></i> Kutip</a>
                            <a class="text-secondary inactive-link small" href=""><i class="fas fa-reply"></i> Balas</a>
                        </div>                        
                    </div>
                </div>
                <div class="card p-3 mb-3">
                    <h6 class="mb-3">Reply</h6>
                    <form>
                        <div class="form-group">
                          <textarea name="body" id="editor1" class="form-control"></textarea>
                        </div>
                    </form>  
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card p-3 mb-3">
                    <div class="d-flex flex-row mb-2">
                        <img src="{{ asset('img/icon/animal.png') }}" width="10%">
                        <h6 class="ml-2 mt-2">{{ $post->category->name }}</h6>
                    </div>
                    <p class="small">{{ $post->category->description }}</p>
                </div>
                <div class="card p-4 mb-3">
                    <h4 class=" text-center mb-3">Thread Populer</h4>
                    <div class="line"></div>
                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <h6 class="mr-2"><a href="" class="inactive-link text-dark">Lorem ipsum dolor sit</a></h6>
                            <p class="small text-secondary">10 November 2020</p>
                        </div>
                        <img src="{{ asset('img/thumbnail/katak.jpg') }}" width="35%">
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <h6 class="mr-2"><a href="" class="inactive-link text-dark">Lorem ipsum dolor sit</a></h6>
                            <p class="small text-secondary">10 November 2020</p>
                        </div>
                        <img src="{{ asset('img/thumbnail/katak.jpg') }}" width="35%">
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <h6 class="mr-2"><a href="" class="inactive-link text-dark">Lorem ipsum dolor sit</a></h6>
                            <p class="small text-secondary">10 November 2020</p>
                        </div>
                        <img src="{{ asset('img/thumbnail/katak.jpg') }}" width="35%">
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <h6 class="mr-2"><a href="" class="inactive-link text-dark">Lorem ipsum dolor sit</a></h6>
                            <p class="small text-secondary">10 November 2020</p>
                        </div>
                        <img src="{{ asset('img/thumbnail/katak.jpg') }}" width="35%">
                    </div>
                </div>
                <div class="card p-4 mb-3">
                    <h4 class=" text-center mb-3">Thread Rekomendasi</h4>
                    <div class="line"></div>
                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <h6 class="mr-2"><a href="" class="inactive-link text-dark">Lorem ipsum dolor sit</a></h6>
                            <p class="small text-secondary">10 November 2020</p>
                        </div>
                        <img src="{{ asset('img/thumbnail/katak.jpg') }}" width="35%">
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <h6 class="mr-2"><a href="" class="inactive-link text-dark">Lorem ipsum dolor sit</a></h6>
                            <p class="small text-secondary">10 November 2020</p>
                        </div>
                        <img src="{{ asset('img/thumbnail/katak.jpg') }}" width="35%">
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <h6 class="mr-2"><a href="" class="inactive-link text-dark">Lorem ipsum dolor sit</a></h6>
                            <p class="small text-secondary">10 November 2020</p>
                        </div>
                        <img src="{{ asset('img/thumbnail/katak.jpg') }}" width="35%">
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <h6 class="mr-2"><a href="" class="inactive-link text-dark">Lorem ipsum dolor sit</a></h6>
                            <p class="small text-secondary">10 November 2020</p>
                        </div>
                        <img src="{{ asset('img/thumbnail/katak.jpg') }}" width="35%">
                    </div>
                </div>
            </div>        
        </div>

    </div>    
@endsection