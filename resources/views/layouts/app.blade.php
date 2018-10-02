<!doctype html>
<html @php(language_attributes())>
	@include('partials.head')
	<body @php(body_class())>
		
		@include('partials.jump-to-content')
		@include('partials.cookie-notice')
		@include('partials.site-notices')

		<!-- START container wrap around page content -->
		<div class="container mx-auto" style="box-shadow: 0px 0px 5px #888888;">

			@include('partials.new_header')

			<!-- 
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
			-->
			
			<div class="col-12 flex content-stretch">
				<div class="container col-12 mx-auto">
					
					@yield('content')

					<!-- @include('partials.footer') -->
					@include('partials.new_footer')
					
				</div>
			</div>
		
		<!-- END container wrap around page content -->
		</div>
			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js?ver=4.9.8"></script>
			<script type="text/javascript" src="http://stage-vardgivare.regionhalland.se/app/themes/halland/dist/scripts/main.js"></script>
			<script type="text/javascript" src="http://stage-vardgivare.regionhalland.se/wp/wp-includes/js/wp-embed.js?ver=4.9.8"></script>
	</body>
</html>
