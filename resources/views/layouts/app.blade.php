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

		<!-- START container wrap around page content -->
		<div class="container mx-auto" style="box-shadow: 0px 0px 5px #888888;">

			@include('partials.new_header')


			
			<div class="col-12 flex content-stretch">
				<div class="container col-12 mx-auto">
					
					@yield('content')
					@include('partials.footer')
					
				</div>
			</div>
		
		<!-- END container wrap around page content -->
		</div>
    <div class="overlay" style="display: none;"></div>
    <script type="text/javascript">var _baTheme=0, _baMode='Aktivera Talande Webb', _baUseCookies=true, _baHideOnLoad=true;</script>
	<script type="text/javascript" src="//www.browsealoud.com/plus/scripts/ba.js"></script>
	</body>
</html>
