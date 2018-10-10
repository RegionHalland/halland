<!-- ****** -->
			<!-- Footer -->
			<!-- ****** -->
			<footer style="background-color: #FAFAFA;"><!-- Add .background-light-grey to styleguide with correct color -->
				<div class="container mx-auto pl5 pr5 pt4 pb2 new_footer">
					<div class="m2 flex flex-wrap">
						<div class="col-12 md-col-6 lg-col-3 pb2">
							<div class="mb3">
								<div class="mb2">
									<strong class="h3" id="111222">Vårdgivare i Halland</strong>
								</div>
								<ul class="small" aria-labelledby="111222">
									@foreach($nav_site as $topLevelPage)
									<li class="mb1">
										<a href="{{ get_page_link($topLevelPage->ID) }}">{{ $topLevelPage->post_title }}</a>
									</li>
									@endforeach
								</ul>
							</div>
						</div>
						<div class="col-12 md-col-6 lg-col-3 pb2">
							<div class="mb3">
								<div class="mb2">
									<h1 class="h3" id="121212">Kontakt</h1>
								</div>
								<ul class="small" aria-labelledby="121212">
									<li class="mb1"><a href="https://www.regionhalland.se/kontakta-oss">Kontakta Region Halland</a></li>
								</ul>
							</div>
						</div>
						<div class="col-12 md-col-6 lg-col-3 pb2">
							<div class="mb3">
								<div class="mb2">
									<h1 class="h3" id="212121">Övriga webbplatser</h1>
								</div>
								<ul class="small" aria-labelledby="212121">
									<li class="mb1"><a href="http://www.regionhalland.se">www.regionhalland.se</a></li>
									<li class="mb1"><a href="https://intra.regionhalland.se/Sidor/default.aspx">Regionens intranät</a></li>
								</ul>
							</div>
						</div>
						<div class="col-12 md-col-6 lg-col-3 pb2">
							<div class="mb3">
								<div class="mb2">
									<h1 class="h3" id="443322">Webbplatsen</h1>
								</div>
								<ul class="small" aria-labelledby="443322">
									<li><a href="http://vardgivare.regionhalland.se/valkommen-till-vardgivarwebben/om-webbplatsen/">Om webbplatsen</a></li>
									<li><a href="https://www.regionhalland.se/om-region-halland/organisation/dataskydd/">Dataskydd</a></li>
								</ul>
							</div>
						</div>
					</div>	
				</div>
			</footer>
			@php(wp_footer())
