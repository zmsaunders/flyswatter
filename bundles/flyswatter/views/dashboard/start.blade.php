@layout('flyswatter::layouts.main')

@section('header')
	@parent
	<small>Dashboard</small>
@endsection

@section('nav')
	@parent
@endsection

@section('content')
	@forelse($projects as $project)
			<h3>{{$project->name}}</h3>
			<div class="well">
			@foreach($project->issues()->take(5)->get() as $issue)
				<h5><a href="{{$flyswatter}}/issue/view/{{$issue->id}}">{{ $issue->summary }}</a></h5>
				<p class="muted"><small>Comments: {{$issue->comments()->count()}}  | Reported by: {{$issue->reporter}} | Assigned to: {{ $issue->owner }}</small></p>
				<hr />
			@endforeach
			</div>
	@empty
		<p>No Issues :-(</p>
	@endforelse
@endsection
