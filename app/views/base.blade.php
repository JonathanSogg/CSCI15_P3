<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Project 3 - Laravel Basics</title>
	{{ HTML::style(url('//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/darkly/bootstrap.min.css')) }}
</head>
<body>
	<h1>Lorem Ipsum and User Generator</h1>
	<div class="content">
	@yield('content')
	</div>
	<h3><a href="{{ url('/') }}">Home</a></h3>
</body>
</html>
