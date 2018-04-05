@extends('layouts.quill')

@section('title')
{!! $blog->title !!}
@endsection

@section('content')
	<h2>{{ $blog->title }} 
		@if(Auth::user()->isAdmin())
			<a href="{{ URL::to('dashboard/blogs/' . $blog->id . '/edit') }}" class="btn btn-outline-primary" role="button">edit</a>
		@endif
	</h2>
	<p>{!! $blog->content !!}</p>

	<a class="btn btn-outline-primary btn-sm" role="button" id="showComments">Show comment section</a>
	<div class="commentSection" style="display: none">
		<h5>
			Comments
			<a class="btn btn-outline-primary btn-sm" role="button" id="add">Add Comment</a>
			<a class="btn btn-outline-primary btn-sm" role="button" id="hideFormbtn" style="display: none; width: 100px;">Hide Form</a>
		</h5>
		<!-- Form for adding comments -->
		<div class="addComment" style="display: none">
			{{ Form::open(array('route' => 'addComment')) }}

			    <div class="form-group">
			        {{ Form::label('title', 'Title') }}
			        {{ Form::text('title', null, array('class' => 'form-control')) }}
			    </div>

			    <div class="form-group">
			        {{ Form::label('content', 'Content') }}
			        {{ Form::textarea('content', null, array('class' => 'form-control')) }}
			    </div>

			    <div class="form-group">
			        {{ Form::hidden('id', $blog->id, array('class' => 'form-control')) }}
			    </div>

			    {{ Form::submit('Post comment', array('class' => 'btn btn-outline-primary')) }}

			{{ Form::close() }}
		</div>

		@foreach ($comments as $comment)
			<div class="comment">
				<b>{{ $comment->title }}</b>
				<p>{{ $comment->content }}</p>

				<div class="reply">
					@foreach ($comment->comment_reply as $reply)
						
						<div class="row">
							<div class="col-md-1"><h4>&#x21B3;</h4></div>
							<div class="col-md-11">
								<b>{{ $reply->title }}</b>
								<p>{{ $reply->content }}</p>
							</div>
						</div>
					@endforeach
				</div>
				<a class="btn btn-outline-primary btn-sm addCommentReplybtn" role="button" value="{{ $comment->id }}" style="width: 100px;">Reply</a>
				<a class="btn btn-outline-primary btn-sm" role="button" id="hideCommentReplybtn" style="display: none;">Hide Form</a>
				<!-- Form for adding replies -->
				<div id="reply_{{ $comment->id }}" class="addReply" style="display: none">
					{{ Form::open(array('route' => 'addReply')) }}
					    <div class="form-group">
					        {{ Form::label('title', 'Title') }}
					        {{ Form::text('title', null, array('class' => 'form-control')) }}
					    </div>

					    <div class="form-group">
					        {{ Form::label('content', 'Content') }}
					        {{ Form::textarea('content', null, array('class' => 'form-control')) }}
					    </div>

					    <div class="form-group">
					        {{ Form::hidden('blog_id', $blog->id, array('class' => 'form-control')) }}
					    </div>

					    <div class="form-group">
					        {{ Form::hidden('comment_id', $comment->id, array('class' => 'form-control')) }}
					    </div>

					    {{ Form::submit('Post reply', array('class' => 'btn btn-outline-primary')) }}
					{{ Form::close() }}
				</div>
			</div>
			
		@endforeach
	</div>

	<script>
		$('#add').click(function() {
			$('.addComment').css("display", "block");
			$('#hideFormbtn').css("display", "inline");
		});

		$('#hideFormbtn').click(function() {
			$('.addComment').css("display", "none");
			$('#hideFormbtn').css("display", "none");
		});

		$('#showComments').click(function() {
			$('.commentSection').css("display", "block");
			$('#showComments').css("display", "none");
		});

		$('.addCommentReplybtn').click(function() {
			var id = $(this).attr('value');
			$('#reply_' + id).css("display", "block");
			$('.addCommentReplybtn').css('display', 'none');
			$('#hideCommentReplybtn').css('display', 'inline');
		});
		
		$('#hideCommentReplybtn').click(function() {
			$('.addReply').css("display", "none");
			$('.addCommentReplybtn').css('display', 'block');
			$('#hideCommentReplybtn').css('display', 'none');
		});
	</script>
	
@endsection
