<!DOCTYPE html>
<html>
<head>
	<title>{{ $title}}</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">

		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{ URL::to('nerds') }}">Brand</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="{{ URL::to('nerds') }}">View All</a></li>
				<li><a href="{{ URL::to('nerds/create') }}">Create</a>
			</ul>
		</nav>

		@if(Session::has('message'))
		<div class="alert alert-info">
			{{ Session::get('message') }}
		</div>
		@endif
	</div>


	@yield('index_content')
	@yield('edit_content')
	@yield('create_content')
	@yield('show_content')
	
</body>
</html>