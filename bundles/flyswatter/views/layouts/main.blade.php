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
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="/issues">Flyswatter</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li><a href="/issues">Dashboard</a></li>
							<li><a href="/issues/new">New Issue</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End Nav -->
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span2">
					{{ $side_nav }}
				</div>
				<div class="span10">
					<header class="row-fluid">
						<div class="page-header">
							<h1>
								@section('header')
								Flyswatter
								@yield_section
							</h1>
						</div>
					</header>
					@yield('content')
				</div>
			</div>
		</div>
		<!-- Load Styles -->
		{{ Asset::container('bootstrapper')->scripts() }}
	</body>
</html>
