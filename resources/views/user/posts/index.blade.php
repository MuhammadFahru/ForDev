@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-lg-8">          
            <div class="card p-3 mb-3">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row">
                        <a class="small text-dark mr-1 inactive-link" href="">Penulis</a>
                        <p class="small">&#8226;</p>
                        <a class="small text-secondary ml-1 inactive-link" href="">Kategori</a>
                    </div>
                    <a href="" class="inactive-link text-dark"><i class="fas fa-ellipsis-h"></i></a>
                </div>
                <div class="d-flex justify-content-between">
                    <div>
                        <h6 class="mr-2"><a href="{{ route('show.thread') }}" class="inactive-link text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h6>
                        <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis eaque unde expedita sapiente tempora totam voluptatum veritatis, at velit sit, recusandae ipsa architecto laborum! Ab omnis aspernatur minima laborum obcaecati! Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur nisi corrupti laborum quia praesentium neque sit atque vitae et iure quod saepe quibusdam aliquam voluptatem excepturi culpa ullam, id amet.</p>
                    </div>
                    <img src="{{ asset('img/thumbnail/katak.jpg') }}" width="35%">
                </div>
                <div class="d-flex justify-content-between mbmin mt-4">
                    <div class="d-flex flex-row">
                        <p class="small text-secondary mr-2"><a class="text-secondary inactive-link" href=""><i class="fas fa-thumbs-up"></i></a> 100</p>
                        <p class="small text-secondary"><a class="text-secondary inactive-link" href=""><i class="fas fa-thumbs-down"></i></a> 20</p>
                        <div class="vl ml-2 mr-2" style="height:20px;"></div>
                        <p class="small text-secondary"><a class="text-secondary inactive-link" href=""><i class="far fa-eye"></i></a> 12K</p>
                    </div>
                    <a href="" class="inactive-link text-dark"><i class="fas fa-share-alt"></i></a>
                </div>
            </div>
            <div class="card p-3 mb-3">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row">
                        <a class="small text-dark mr-1 inactive-link" href="">Penulis</a>
                        <p class="small">&#8226;</p>
                        <a class="small text-secondary ml-1 inactive-link" href="">Kategori</a>
                    </div>
                    <a href="" class="inactive-link text-dark"><i class="fas fa-ellipsis-h"></i></a>
                </div>
                <div class="d-flex justify-content-between">
                    <div>
                        <h6 class="mr-2"><a href="{{ route('show.thread') }}" class="inactive-link text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h6>
                        <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis eaque unde expedita sapiente tempora totam voluptatum veritatis, at velit sit, recusandae ipsa architecto laborum! Ab omnis aspernatur minima laborum obcaecati! Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur nisi corrupti laborum quia praesentium neque sit atque vitae et iure quod saepe quibusdam aliquam voluptatem excepturi culpa ullam, id amet.</p>
                    </div>
                    <img src="{{ asset('img/thumbnail/katak.jpg') }}" width="35%">
                </div>
                <div class="d-flex justify-content-between mbmin mt-4">
                    <div class="d-flex flex-row">
                        <p class="small text-secondary mr-2"><a class="text-secondary inactive-link" href=""><i class="fas fa-thumbs-up"></i></a> 100</p>
                        <p class="small text-secondary"><a class="text-secondary inactive-link" href=""><i class="fas fa-thumbs-down"></i></a> 20</p>
                        <div class="vl ml-2 mr-2" style="height:20px;"></div>
                        <p class="small text-secondary"><a class="text-secondary inactive-link" href=""><i class="far fa-eye"></i></a> 12K</p>
                    </div>
                    <a href="" class="inactive-link text-dark"><i class="fas fa-share-alt"></i></a>
                </div>
            </div>
            <div class="card p-3 mb-3">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row">
                        <a class="small text-dark mr-1 inactive-link" href="">Penulis</a>
                        <p class="small">&#8226;</p>
                        <a class="small text-secondary ml-1 inactive-link" href="">Kategori</a>
                    </div>
                    <a href="" class="inactive-link text-dark"><i class="fas fa-ellipsis-h"></i></a>
                </div>
                <div class="d-flex justify-content-between">
                    <div>
                        <h6 class="mr-2"><a href="{{ route('show.thread') }}" class="inactive-link text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h6>
                        <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis eaque unde expedita sapiente tempora totam voluptatum veritatis, at velit sit, recusandae ipsa architecto laborum! Ab omnis aspernatur minima laborum obcaecati! Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur nisi corrupti laborum quia praesentium neque sit atque vitae et iure quod saepe quibusdam aliquam voluptatem excepturi culpa ullam, id amet.</p>
                    </div>
                    <img src="{{ asset('img/thumbnail/katak.jpg') }}" width="35%">
                </div>
                <div class="d-flex justify-content-between mbmin mt-4">
                    <div class="d-flex flex-row">
                        <p class="small text-secondary mr-2"><a class="text-secondary inactive-link" href=""><i class="fas fa-thumbs-up"></i></a> 100</p>
                        <p class="small text-secondary"><a class="text-secondary inactive-link" href=""><i class="fas fa-thumbs-down"></i></a> 20</p>
                        <div class="vl ml-2 mr-2" style="height:20px;"></div>
                        <p class="small text-secondary"><a class="text-secondary inactive-link" href=""><i class="far fa-eye"></i></a> 12K</p>
                    </div>
                    <a href="" class="inactive-link text-dark"><i class="fas fa-share-alt"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card p-4">
                <h4 class=" text-center mb-3">Thread Populer</h4>
                <div class="line"></div>
                <div class="d-flex justify-content-between mt-3">
                    <div>
                        <h6 class="mr-2"><a href="{{ route('show.thread') }}" class="inactive-link text-dark">Lorem ipsum dolor sit</a></h6>
                        <p class="small text-secondary">10 November 2020</p>
                    </div>
                    <img src="{{ asset('img/thumbnail/katak.jpg') }}" width="35%">
                </div>
                <div class="d-flex justify-content-between mt-3">
                    <div>
                        <h6 class="mr-2"><a href="{{ route('show.thread') }}" class="inactive-link text-dark">Lorem ipsum dolor sit</a></h6>
                        <p class="small text-secondary">10 November 2020</p>
                    </div>
                    <img src="{{ asset('img/thumbnail/katak.jpg') }}" width="35%">
                </div>
                <div class="d-flex justify-content-between mt-3">
                    <div>
                        <h6 class="mr-2"><a href="{{ route('show.thread') }}" class="inactive-link text-dark">Lorem ipsum dolor sit</a></h6>
                        <p class="small text-secondary">10 November 2020</p>
                    </div>
                    <img src="{{ asset('img/thumbnail/katak.jpg') }}" width="35%">
                </div>
                <div class="d-flex justify-content-between mt-3">
                    <div>
                        <h6 class="mr-2"><a href="{{ route('show.thread') }}" class="inactive-link text-dark">Lorem ipsum dolor sit</a></h6>
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
                        <h6 class="mr-2"><a href="{{ route('show.thread') }}" class="inactive-link text-dark">Lorem ipsum dolor sit</a></h6>
                        <p class="small text-secondary">10 November 2020</p>
                    </div>
                    <img src="{{ asset('img/thumbnail/katak.jpg') }}" width="35%">
                </div>
                <div class="d-flex justify-content-between mt-3">
                    <div>
                        <h6 class="mr-2"><a href="{{ route('show.thread') }}" class="inactive-link text-dark">Lorem ipsum dolor sit</a></h6>
                        <p class="small text-secondary">10 November 2020</p>
                    </div>
                    <img src="{{ asset('img/thumbnail/katak.jpg') }}" width="35%">
                </div>
                <div class="d-flex justify-content-between mt-3">
                    <div>
                        <h6 class="mr-2"><a href="{{ route('show.thread') }}" class="inactive-link text-dark">Lorem ipsum dolor sit</a></h6>
                        <p class="small text-secondary">10 November 2020</p>
                    </div>
                    <img src="{{ asset('img/thumbnail/katak.jpg') }}" width="35%">
                </div>
                <div class="d-flex justify-content-between mt-3">
                    <div>
                        <h6 class="mr-2"><a href="{{ route('show.thread') }}" class="inactive-link text-dark">Lorem ipsum dolor sit</a></h6>
                        <p class="small text-secondary">10 November 2020</p>
                    </div>
                    <img src="{{ asset('img/thumbnail/katak.jpg') }}" width="35%">
                </div>
            </div>
        </div>        

    </div>
</div>
@endsection