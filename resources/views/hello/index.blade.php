<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

	<title>Hello World!</title>
</head>

<body>
<h1>Hello World!</h1>

<div id="app">
	<div v-for="n in 10">
		TEST!!! <br>
	</div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
