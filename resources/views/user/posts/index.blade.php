@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-lg-8">
            @forelse ($post as $item)
                <div class="card card-thread p-3 mb-3">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row">
                            <a class="small text-dark mr-1 inactive-link" href="">{{$item->author->name}}</a>
                            <p class="small">&#8226;</p>
                            <a class="small text-secondary ml-1 inactive-link" href="">{{ $item->category->name }}</a>
                        </div>
                        <!-- Default dropright button -->
                        <div class="btn-group dropleft">
                            <a href="" class="inactive-link text-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                            <div class="dropdown-menu p-2">
                                @can('security', $item)
                                    <a href="{{ route('edit.thread', $item) }}" id="navbarDropdown" class="inactive-link text-secondary small"><i class="fas fa-edit"></i> Edit Thread Saya</a><br>                                    
                                @endcan
                                <a href="" id="navbarDropdown" class="inactive-link text-secondary small"><i class="far fa-bookmark mr-1"></i> Simpan Thread</a>
                            </div>
                        </div>                        
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="mr-3">
                            <h5 class="mr-2"><a href="{{ route('show.thread',$item) }}" class="inactive-link text-dark">{{ $item->judul }}</a></h5>
                        </div>
                        <img src="{{ asset('storage/'.$item->thumbnail) }}" class="post-thumbnail">
                    </div>
                    <div class="d-flex justify-content-between mbmin mt-3">
                        <div class="d-flex flex-row">
                            <p class="small text-secondary mr-2"><a class="text-secondary inactive-link" href=""><i class="fas fa-thumbs-up"></i></a> 100</p>
                            <p class="small text-secondary"><a class="text-secondary inactive-link" href=""><i class="fas fa-thumbs-down"></i></a> 20</p>
                            <div class="vl ml-2 mr-2" style="height:20px;"></div>
                            <p class="small text-secondary"><a class="text-secondary inactive-link" href=""><i class="far fa-eye"></i></a> 12K</p>
                        </div>
                        <a href="" class="inactive-link text-dark"><i class="fas fa-share-alt"></i></a>
                    </div>
                </div>            
            @empty
                
            @endforelse             
        </div>

        <div class="col-lg-4">
            <div class="card p-4">
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
            <div class="card p-4 mt-3">
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