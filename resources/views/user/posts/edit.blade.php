@extends('layouts.app')

@section('content')
    
    <div class="container">
        <form method="POST" action="{{ route('update.thread',$post) }}" autocomplete="off" enctype="multipart/form-data">
            @method('patch')
            @csrf
            @include('user.posts.form', [
                'submit' => 'Update',
                'delete' => '
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Delete</button>
                '
            ])
        </form>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anda yakin untuk menghapusnya ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div>
                        <div><small>Judul : {{ $post->judul }}</small></div>
                        <div class="text-secondary">
                            <small>Published : {{ $post->created_at->format('d F Y') }}</small>
                        </div>
                    </div>                    
                </div>
                <div class="modal-footer">
                    <form action="{{ route('delete.thread',$post) }}" method="POST">
                        @csrf
                        @method('delete')
                        <div class="d-flex">
                            <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Tidak</button>
                            <button class="btn btn-danger" type="submit">Yakin</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>  
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