<div class="well sidebar-nav">
						<ul class="nav nav-list">
							@section('nav')
							<li class="nav-header">Projects</li>
							@foreach(\Flyswatter\Models\Project::all() as $project)
							<li><a href="/issues/project/{{$project->id}}">{{$project->name}}</a></li>
							@endforeach
							@yield_section
						</ul>
					</div>