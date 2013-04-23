@layout('flyswatter::layouts.main')

@section('header')
	@parent
	<small>View Issue</small>
@endsection

@section('content')
	<h3>{{ $issue->summary }}</h3>
	<div class="well">
		{{ $issue->description }}
	</div>
	<h4>Comments</h4>
	@forelse($comments as $comment)
		<p>{{$comment->comment}} <small class="muted"> - By {{$comment->commentor}} at {{$comment->created_at}}</small></p>
		<hr />
	@empty
		<p>No comments found!</p>
	@endforelse
@endsection
