<!doctype html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>{{ $title }} - Flyswatter</title>
		{{ Asset::container('header')->styles() }}
	</head>
	<body>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span2">
					<div class="well sidebar-nav">
						<ul class="nav nav-list">
							@section('nav')
							<li class="nav-header">Tickets</li>
							<li><a href="/ticket/new">New</a></li>
							@yield_section
						</ul>
					</div>
				</div>
				<div class="span10">
					<header class="row-fluid">
						<h1>
							@section('header')
							Flyswatter
							@yield_section
						</h1>
					</header>
					@yield('content')
				</div>
			</div>
		</div>
		<!-- Load Styles -->
		{{ Asset::container('bootstrapper')->scripts() }}
	</body>
</html>
