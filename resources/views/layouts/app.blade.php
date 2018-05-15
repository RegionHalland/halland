<!doctype html>
<html @php(language_attributes())>
	@include('partials.head')
	<body @php(body_class())>
		@include('partials.cookie-notice')
		@include('partials.site-notices')

		@include('partials.header')
		@yield('content')
	
		@include('partials.footer')
	</body>
</html>