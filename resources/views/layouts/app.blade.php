<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Forum Developer</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tail.select@0.5.15/css/default/tail.select-light.css">

    <script src="{{ asset('ckeditor-full/ckeditor.js') }}"></script>

</head>
<body>
        
    @include('layouts.components.navbar')

    <main class="py-4">
        @yield('content')
    </main>

    @include('layouts.components.footer')
    
    @yield('js')

    <script>
        CKEDITOR.replace( 'editor1', {
            filebrowserUploadUrl: "{{ route('upload.thread', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            height: '300px'
        });
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

    <script src="https://cdn.jsdelivr.net/npm/tail.select@0.5.15/js/tail.select-full.min.js"></script>
    
</body>
</html>
