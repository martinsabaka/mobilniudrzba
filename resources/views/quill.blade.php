@extends('layouts.quill')

@section('title')
{{ $post->title }}
@endsection

@section('content')
	<!-- Theme included stylesheets -->
	<link href="//cdn.quilljs.com/1.3.5/quill.snow.css" rel="stylesheet">

	<!-- Core build with no theme, formatting, non-essential modules -->
	<link href="//cdn.quilljs.com/1.3.5/quill.core.css" rel="stylesheet">
	<script src="//cdn.quilljs.com/1.3.5/quill.core.js"></script>

	<!-- Include the Quill library -->
	<script src="https://cdn.quilljs.com/1.3.5/quill.js"></script>
	
	<!-- Include stylesheet -->
	<link href="https://cdn.quilljs.com/1.3.5/quill.snow.css" rel="stylesheet">

	<!-- Create the editor container -->
	<div id="editor">
	    {!! $post->content !!}
	</div>
	<button id='insertDB' class="btn btn-primary" role="button">Save</button>
	<a href="{{ route($post->url) }}" class="btn btn-outline-primary" role="button">Return</a>
	<i id='success' style="display: none">Changes have been saved</i>
	
	<!-- 	QuillJS editor -->
	<script type="text/javascript" src="{{ URL::asset('js/quillEditor.js') }}"></script>
		
	<!-- Save button with ajax call to save edited post -->
	<script>
	var url = '{{ route('edit') }}';
    var token = '{{ Session::token() }}';

    var redirect = '{{ $post->url }}'.split('/');
    console.log(redirect);

    $('#insertDB').click(function(){
    	$('#success').css("display", "none");
    	$.ajax({
	    		method: 'POST',
	    		url: url,
	    		data: { body: quill.container.firstChild.innerHTML, postId: {{ $post->id }}, _token: token },
	   		 })
    		.done(function(msg) {
    			$('#success').css("display", "block");
    		});
	    		
    });

	</script>

@endsection