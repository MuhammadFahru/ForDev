@extends('layouts.app')

@section('content')

    @include('sweetalert::alert')

    <div class="container">
        <div class="mb-3">
            <div class="card p-3 rounded-0" style="background-image: url(../img/cover_profile/contoh.jpg); background-size:cover; height:180px;">
                <div class="d-flex flex-row-reverse">
                    <a href="" class="ml-2 btn btn-primary"><i class="fas fa-edit"></i> Edit Profile</a>
                    <a href="" class="btn btn-light"><i class="fas fa-camera"></i> Ganti Cover</a>
                </div>
            </div>
            <div class="card p-3 rounded-0">
                <div class="d-flex justify-content-start">
                    <img src="{{asset('img/ava.png')}}" class="rounded-circle photo-profile ml-5">
                    <div class="ml-5">
                        <h4>{{ Auth::user()->name }}</h4>
                        <p class="small text-secondary">Bergabung Sejak 10 November 2020</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card p-3" style="height: 270px;"></div>
            </div>
            <div class="col-lg-8">
                <div class="card p-3 mb-3">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Thread</a>
                          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Post</a>
                        </div>
                    </nav>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        @forelse ($post as $item)
                            <div class="card p-3 mb-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-row">
                                        <a class="small text-dark mr-1 inactive-link" >{{ $item->created_at->format('d M Y ') }}</a>
                                        <p class="small">&#8226;</p>
                                        <a class="small text-secondary ml-1 inactive-link" href="">{{ $item->category->name }}</a>
                                    </div>
                                    <a href="{{ route('edit.thread', $item) }}" id="navbarDropdown" class="inactive-link text-secondary"><i class="fas fa-edit"></i></a>
                                </div>
                                <h5 class="mr-2"><a href="{{ route('show.thread',$item) }}" class="inactive-link text-dark">{{ Str::limit($item->judul,65) }}</a></h5>
                            </div>
                        @empty
                            Tidak Ada Data Tersedia
                        @endforelse
                    </div>                    
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        Tidak Ada Data Tersedia
                    </div>
                </div>                
            </div>
        </div>        
    </div>    
    
@endsection