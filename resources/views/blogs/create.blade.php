<!-- app/views/nerds/edit.blade.php -->

@extends('layouts.dashboardDefault')

@section('title')
Create Blog
@endsection

@section('content')
    <a class="btn btn-small btn-success" href="{{ URL::to('dashboard/blogs') }}">All Blogs</a>
    <a class="btn btn-small btn-success" href="{{ URL::to('dashboard/blogs/create') }}">Create Blog</a>

    <!-- Theme included stylesheets -->
    <link href="//cdn.quilljs.com/1.3.5/quill.snow.css" rel="stylesheet">

    <!-- Core build with no theme, formatting, non-essential modules -->
    <link href="//cdn.quilljs.com/1.3.5/quill.core.css" rel="stylesheet">
    <script src="//cdn.quilljs.com/1.3.5/quill.core.js"></script>

    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.5/quill.js"></script>
    
    <!-- Include stylesheet -->
    <link href="https://cdn.quilljs.com/1.3.5/quill.snow.css" rel="stylesheet">

    <div class="form-group" id='blogTitle'>
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null, array('class' => 'form-control', 'id' => 'titleField')) }}
    </div>

    <!-- Create the editor container -->
    <div id="editor">
        
    </div>
    <button class='btn btn-outline-primary' id='insertDB'>Save</button>
    <i id='success' style="display: none">Blog has been created successfuly</i>
    
    <!--    QuillJS editor -->
    <script type="text/javascript" src="{{ URL::asset('js/quillEditor.js') }}"></script>
        
    <!-- Save button with ajax call to save edited post -->
    <script>

        $('#insertDB').click(function(){
            var url = '{{ route('createBlog') }}';
            var token = '{{ Session::token() }}';
            var title = String($('#titleField').val());
            var userId = {{ Auth::user()->id }}
            console.log(userId, title, quill.container.firstChild.innerHTML);
            
            $('#success').css("display", "none");
            $.ajax({
                method: 'POST',
                dataType: "json",
                url: url,
                data: { user: userId, blogTitle: title, body: quill.container.firstChild.innerHTML, _token: token },
             })
            .done(function(msg) {
                $('#success').css("display", "block");
            });     
        });

    </script>

@endsection
