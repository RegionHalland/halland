<!doctype html>
<html @php(language_attributes())>
	@include('partials.head')
	<body @php(body_class())>
		@include('partials.cookie-notice')
		@include('partials.site-notices')

		@include('partials.header')

		@hasSection ('subheader')
			<div class="py3 background-gradient-blue">
				<div class="container px2 mx-auto">
					<div class="clearfix">
						@yield('subheader')
					</div>
				</div>
			</div>
		@endif

		@yield('content')

		@include('partials.footer')
	</body>
</html>
