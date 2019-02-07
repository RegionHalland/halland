<!doctype html>
<html @php(language_attributes())>
	@include('partials.head')
	<body @php(body_class())>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJTVNM6"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->	

		@include('partials.jump-to-content')
		@include('partials.cookie-notice')
		@include('partials.site-notices')

		@include('partials.header')

		@yield('content')

		@include('partials.footer')
	</body>
</html>