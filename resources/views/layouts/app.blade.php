<!doctype html>
<html @php(language_attributes())>
	@include('partials.head')
	<body @php(body_class())>
		@include('partials.jump-to-content')
		@include('partials.cookie-notice')
		@include('partials.site-notices')

		@include('partials.header')
		@hasSection ('subheader')
			<div class="background-gradient-blue py3 px2">
				<div class="container mx-auto">
					<div class="clearfix mxn2">
						@yield('subheader')
					</div>
				</div>
			</div>
		@endif

		@yield('content')

		@include('partials.footer')
	</body>
</html>
