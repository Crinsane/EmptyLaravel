<!doctype html>
<html lang="nl_NL">
<head>
	<meta charset="utf-8">
	<title>Matas Dashboard &raquo; @yield('title', 'Welkom op het Matas Dashboard.')</title>

	{{ Asset::styles() }}
</head>
<body>

	@include('partials.navigation')

	<div class="container">
		@yield('content')
	</div>

	{{ Asset::scripts() }}
</body>
</html>