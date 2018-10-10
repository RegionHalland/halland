<header aria-label="sidhuvud">
		<!-- ************** -->
		<!-- Top navigation -->
		<!-- NOTE! Class "breadcrumbs" only for hide in mobile. Change to another class later -->
		<!-- ************** -->
		<nav aria-label="toppmeny" class="container mx-auto pb1 pt0 pr5 small bredcrumbs" style="text-align: right; background-color: #F3F3F3;">
			<ul aria-label="Toppmenylänkar">
				<li class="pl4" style="display:inline">
					<!-- SVG here when icon is in styleguide -->
					<svg class="icon icon--sm mr1">
						<use xlink:href="#monitor"/>
					</svg>
					<a href="https://etjanster.regionhalland.se" style="vertical-align: middle; color: black;">E-tjänster</a>
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
						<nav class="rh-site-nav">
							
							<div class="rh-site-nav__top">
                                <div class="rh-site-nav__container">
                                    <div class="flex" style="width:100%;">
                                        <div class="col-4 pt2">
                                            <button class="rh-site-nav__menu-btn">
                                                <svg class="icon-badge-nav icon-badge-nav--md">
                                                    <use xlink:href="#menu"/>
                                                </svg>
                                                <span class="hidden-inline-sm">Meny</span>
                                            </button>
                                        </div>
                                        <div class="col-8">
                                            <span>
                                                <a href="{{ esc_url( home_url( '/' ) ) }}" class="rh-site-nav__logo" aria-label="Till startsidan">
                                                    <img src="@asset('images/navigation_logo.svg')" alt="">
                                                </a>
                                            </span>
                                            <span class="ml1 pl1" style="border-left: 1px solid grey">
                                            	Vårdgivare&nbsp;Halland
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<div class="rh-site-nav__bottom">
								<div class="rh-site-nav__container">
									<ul class="rh-site-nav__list">
										@foreach($nav_site as $topLevelPage)
										<li class="rh-site-nav__item">
											<a href="{{ get_page_link($topLevelPage->ID) }}" class="rh-site-nav__link">{{ $topLevelPage->post_title }}</a>
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