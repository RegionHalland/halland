<!doctype html>
<html @php(language_attributes())>
	@include('partials.head')
	<body @php(body_class())>
		@include('partials.cookie-notice')
		@include('partials.jump-to-content')
		@include('partials.site-notices')

		@include('partials.header')
        @include('partials.content-link')
		@yield('content')
	
		@include('partials.footer')
	</body>
</html>