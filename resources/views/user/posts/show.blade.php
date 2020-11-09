@extends('layouts.app')
@section('content')
    <div class="container">

        <!-- Navigation -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }}" class="inactive-link"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#" class="inactive-link">Thread</a></li>
              <li class="breadcrumb-item"><a href="#" class="inactive-link">Category</a></li>
              <li class="breadcrumb-item active" aria-current="page">Judul Thread</li>
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
                                <p>Penulis</p>
                                <p class="small text-secondary mintop-1">10 November 2020</p>
                            </div>
                        </div>
                        <a href="" class="inactive-link text-secondary"><i class="fas fa-ellipsis-h"></i></a>
                    </div>
                    <hr class="mintop-1">
                    <h6 class="mb-3">Judul Thread</h6>
                    <img src="{{ asset('img/thumbnail/katak.jpg') }}" width="100%" class="mb-3">
                    <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi voluptates maxime recusandae saepe veniam reiciendis delectus, a eaque similique omnis, corrupti deleniti aperiam tempora quod blanditiis ipsa dignissimos? Soluta, ut. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat, laudantium nulla? Illo architecto esse omnis eaque ex nostrum mollitia eveniet delectus maiores, similique blanditiis, vel consectetur in magni? Et, reprehenderit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem nesciunt vitae, animi, culpa repellendus ea voluptatibus porro eaque quam autem suscipit fugit! Hic mollitia repellendus impedit voluptatibus voluptatum obcaecati? Sunt! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore officia eligendi quidem quasi molestiae, consequatur quae odio atque nobis, delectus fugiat! Cumque voluptatibus itaque ex odio, ipsa repudiandae doloribus qui. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ullam excepturi distinctio officiis eveniet maiores recusandae? Earum facere nam quia ad, corporis neque commodi ipsum dolore odio, sint architecto sunt. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique amet dignissimos nobis sunt, libero impedit eveniet adipisci eos iusto architecto. Error, repellendus labore ut ratione dicta repellat recusandae. Nesciunt, accusantium! Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nemo, voluptatibus expedita autem voluptas, nostrum laudantium alias est id maxime sunt, quis et magnam nam omnis fuga. Quasi, similique unde. Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi voluptates maxime recusandae saepe veniam reiciendis delectus, a eaque similique omnis, corrupti deleniti aperiam tempora quod blanditiis ipsa dignissimos? Soluta, ut. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat, laudantium nulla? Illo architecto esse omnis eaque ex nostrum mollitia eveniet delectus maiores, similique blanditiis, vel consectetur in magni? Et, reprehenderit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem nesciunt vitae, animi, culpa repellendus ea voluptatibus porro eaque quam autem suscipit fugit! Hic mollitia repellendus impedit voluptatibus voluptatum obcaecati? Sunt! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore officia eligendi quidem quasi molestiae, consequatur quae odio atque nobis, delectus fugiat! Cumque voluptatibus itaque ex odio, ipsa repudiandae doloribus qui. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ullam excepturi distinctio officiis eveniet maiores recusandae? Earum facere nam quia ad, corporis neque commodi ipsum dolore odio, sint architecto sunt. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique amet dignissimos nobis sunt, libero impedit eveniet adipisci eos iusto architecto. Error, repellendus labore ut ratione dicta repellat recusandae. Nesciunt, accusantium! Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
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
                        <h6 class="ml-2 mt-2">Nama Category</h6>
                    </div>
                    <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, ratione est laboriosam possimus voluptatum obcaecati aspernatur sint veniam inventore at sed illo perferendis pariatur ipsam, magnam libero nesciunt voluptate adipisci.</p>
                </div>
                <div class="card p-4 mb-3">
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
                <div class="card p-4 mb-3">
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
@section('js')
    <script>
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.editorConfig = function( config ) {
            config.toolbarGroups = [
                { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
                { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
                { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
                { name: 'forms', groups: [ 'forms' ] },
                { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
                { name: 'links', groups: [ 'links' ] },
                { name: 'insert', groups: [ 'insert' ] },
                '/',
                { name: 'styles', groups: [ 'styles' ] },
                { name: 'colors', groups: [ 'colors' ] },
                { name: 'tools', groups: [ 'tools' ] },
                { name: 'others', groups: [ 'others' ] },
                { name: 'about', groups: [ 'about' ] }
            ];
            config.autoParagraph = false;
            config.filebrowserUploadMethod = 'form';
            config.extraPlugins = 'html5video,widget,widgetselection,clipboard,lineutils';
            config.removeButtons = 'Source,Save,Templates,Find,SelectAll,Scayt,Form,NewPage,Preview,Print,ExportPdf,Replace,TextField,Textarea,Select,ImageButton,Button,HiddenField,CopyFormatting,RemoveFormat,CreateDiv,Outdent,Indent,BidiLtr,BidiRtl,Language,Flash,Table,HorizontalRule,PageBreak,Cut,Copy,Paste,PasteText,PasteFromWord,Checkbox,Radio,Styles,Format,Font,FontSize,TextColor,BGColor,Maximize,ShowBlocks,About,SpecialChar,Iframe,Unlink,Anchor';
        };
    </script>
@endsection