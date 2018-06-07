<!-- app/views/nerds/edit.blade.php -->

@extends('layouts.dashboardDefault')

@section('title')
Edit Blog
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

    <!-- jQuery library -->
    @include('includes.jquery')
    
    <div class="form-group" id='blogTitle'>
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', $post->title, array('class' => 'form-control', 'id' => 'titleField')) }}
    </div>
    
        <!-- Create the editor container -->
        <div id="editor">
            {!! $post->content !!}
        </div>
        <a class="btn btn-outline-primary" role="button" id="insertDB">Save</a>
        <a href="{{ URL::to('blog/' . $post->id) }}" class="btn btn-outline-primary" role="button">Return</a>
        <i id='success' style="display: none">Changes have been saved</i>
    
    
    <!--    QuillJS editor -->
    <script type="text/javascript" src="{{ URL::asset('js/quillEditor.js') }}"></script>
        
    <!-- Save button with ajax call to save edited post -->
    <script>
        $(document).ready(function() { 
            $('#insertDB').click(function(){
                var url = '{{ route('editBlog', ['id' => $post->id]) }}';
                var token = '{{ Session::token() }}';
                var title = String($('#titleField').val());
                console.log(title, quill.container.firstChild.innerHTML);
                
                $('#success').css("display", "none");
                $.ajax({
                    method: 'POST',
                    dataType: "json",
                    url: url,
                    data: { blogTitle: title, body: quill.container.firstChild.innerHTML, blogId: {{ $post->id }}, _token: token },
                 })
                .done(function(msg) {
                    $('#success').css("display", "block");
                });      
            });
        });
    </script>

@endsection
