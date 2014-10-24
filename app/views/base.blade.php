<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Project 3 - Laravel Basics</title>
	{{ HTML::style(url('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css')) }}
</head>
<body>
	<div class="content">
	@yield('content')
	</div>
	<a href="{{ url('/') }}">Home</a>
</body>
</html>
