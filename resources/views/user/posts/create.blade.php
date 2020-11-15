@extends('layouts.app')

@section('content')
    
    <div class="container">
        <form action="{{ route('store.thread') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf
            @include('user.posts.form')
        </form>
    </div>

@endsection
@section('js')
    
    <script>
        document.addEventListener("DOMContentLoaded", function(){
            tail.select("#select1", {
                animate: true,
                multiple: false,
                placeholder: "Pilih Kategori",
                search: true,
                width: '100%',
                deselect: true
            });
            tail.select("#select2", {
                multiple: true,
                placeholder: "Pilih Tag",
                search: true,
                width: '100%',
                deselect: true
            });
        });
    </script>

    <script>
        var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('output');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
        };
    </script>
@endsection