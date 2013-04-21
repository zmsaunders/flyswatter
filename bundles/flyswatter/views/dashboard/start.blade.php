@layout('flyswatter::layouts.main')

@section('header')
	@parent
	<small>Dashboard</small>
@endsection

@section('content')
	@forelse($issues as $issue)
		<h3>{{ $issue->summary }}</h3>
		<p>{{ $issue->description }}</p>
		<p class="muted"><small>Reported by: {{$issue->reporter}} | Assigned to: {{ $issue->owner }}</small></p>
		<ul>
		@forelse($issue->comments as $comment)
			<li>{{$comment->comment}} <small class="muted"> - {{$comment->commentor}} at {{$comment->created_at}}</small></li>
		@empty
			<li>No Comments.</li>
		@endforelse
		</ul>
		<hr />
	@empty
		<p>No Issues :-(</p>
	@endforelse
@endsection
