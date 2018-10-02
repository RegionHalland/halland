<header aria-label="sidhuvud">
		<!-- ************** -->
		<!-- Top navigation -->
		<!-- NOTE! Class "breadcrumbs" only for hide in mobile. Change to another class later -->
		<!-- ************** -->
		<nav aria-label="toppmeny" class="container mx-auto pb1 pt0 pr5 small bredcrumbs" style="text-align: right; background-color: #F3F3F3; border-bottom: 1px solid lightgrey;">
			<ul aria-label="Toppmenylänkar">
				<li class="pl4" style="display:inline">
					<object aria-hidden="true" tabindex="-1" class="pr1" type="image/svg+xml" data="img/icon-etjanst.svg" style="vertical-align: middle;"></object>
					<a href="" style="vertical-align: middle; color: black;">E-tjänster</a>
				</li>
			</ul>
		</nav>
		
		<!-- ******************************** -->
		<!-- Menu + logo-image + small search -->
		<!-- NOTE. Not correct image. Just for test -->
		<!-- NOTE. Meny + search must be defined -->
		<!-- ******************************** -->

		<div class="col-12 flex content-stretch">
			<div class="container mx-auto" style="width: 1320px;">
				<div class="flex flex-wrap background-white">
					<div class="col-12 left-align">
						<nav class="site-nav">
							
							<div class="site-nav__top">
								<div class="site-nav__container">
									<div class="flex" style="width:100%;">
										<div class="col-4 pt2">
											<button class="site-nav__menu-btn">
												<svg class="icon-badge-nav icon-badge-nav--md">
													<use xlink:href="#menu"/>
												</svg>
												<span class="hidden-inline-sm">Meny</span>
											</button>
										</div>
										<div class="col-8">
											<div>
												<a href="{{ esc_url( home_url( '/' ) ) }}" class="site-nav__logo" aria-label="Till startsidan">
													<img src="@asset('images/navigation_logo.svg')" alt="">
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="site-nav__bottom">
								<div class="site-nav__container">
									<ul class="site-nav__list">
										@foreach($nav_site as $topLevelPage)
										<li class="site-nav__item">
											<a href="#" onclick="return false" class="site-nav__link" ">{{ $topLevelPage->post_title }}</a>
											@if(isset($topLevelPage->children))
											<nav class="dropdown">
												<div class="site-nav__container">
													<ul class="dropdown__list">
														@foreach($topLevelPage->children as $childPage)
														<li class="dropdown__item">
															<a href="{{ get_page_link($childPage->ID) }}" class="dropdown__link">{{ $childPage->post_title }}</a>
														</li>
														@endforeach
													</ul>
												</div>
											</nav>
											@endif
										</li>
										@endforeach
									</ul>
								</div>
							</div>
						<!-- <div class="site-nav__overlay"></div> -->
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>