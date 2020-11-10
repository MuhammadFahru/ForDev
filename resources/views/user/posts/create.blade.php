@extends('layouts.app')

@section('content')
    
    <div class="container">
        <form>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card p-4">
                        <div class="row mb-2">
                            <div class="col-lg-1">
                                <img src="{{ asset('/img/ava.png') }}" width="150%">
                            </div>
                            <div class="col-lg-8">
                                <p>Penulis</p>
                                <p class="small text-secondary mintop-1">Post 10</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Judul Thread</label>
                            <input type="text" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="editor1">Isi Thread</label>
                            <textarea name="body" id="editor1" class="form-control"></textarea>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card p-4">
                        <div class="form-group">
                            <label for="thumbnail">Thumbnail</label><br>
                            <img src="{{ asset('img/thumbnail/katak.jpg') }}" class="thumbnail-post" id="output"><br>
                            <div class="custom-file mt-4 w-500">
                                <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail" onchange="loadFile(event)" accept=".jpg,.png,.jpeg">
                                <label class="custom-file-label" for="thumbnail">Choose</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select1">Pilih Kategori</label>
                            <select id="select1">
                                <option value="">Olahraga</option>
                                <option value="">Politik</option>
                                <option value="">Hiburan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="select2">Pilih Tag</label>
                            <select id="select2">
                                <option value="">Olahraga</option>
                                <option value="">Politik</option>
                                <option value="">Hiburan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary w-100 mt-2">Post</button>
                        </div>                        
                    </div>
                </div>
            </div>        
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