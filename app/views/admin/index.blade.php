@extends('layouts/admin')
@section('title', 'Dashboard')
@section('description', '')

@section('content')
<div class="page-header">
    <h1>Manage</h1>
</div>
<div class="keystone-lists">
    <div class="nav-section">
        <h4>Pods</h4>
        <ul>
            <li><a href="{{ URL::to('gp/pods') }}">Pods</a></li>
        </ul>
    </div>
    <div class="nav-section">
        <h4>Games</h4>
        <ul>
            <li><a href="{{ URL::to('gp/games') }}">Games</a></li>
            <li><a href="{{ URL::to('gp/game-categories') }}">Game Categories</a></li>
        </ul>
    </div>
    <div class="nav-section">
        <h4>Posts</h4>
        <ul>
            <li><a href="{{ URL::to('gp/posts') }}">Posts</a></li>
            <li><a href="{{ URL::to('gp/post-categories') }}">Post Categories</a></li>
        </ul>
    </div>
    <div class="nav-section">
        <h4>Users</h4>
        <ul>
            <li><a href="{{ URL::to('gp/users') }}">Users</a></li>
        </ul>
    </div>
</div>
@stop

@section('scripts')
    <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            theme: "modern",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            toolbar2: "print preview media | forecolor backcolor emoticons",
            image_advtab: true,
            templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
            ]
        });
    </script>
@stop
