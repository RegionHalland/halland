<header aria-label="sidhuvud">
	<!-- ************** -->
	<!-- Top navigation -->
	<!-- NOTE! Class "breadcrumbs" only for hide in mobile. Change to another class later -->
	<!-- ************** -->
	<nav aria-label="toppmeny" class="container mx-auto pb1 pt0 pr5 small bredcrumbs z4" style="text-align: right; background-color: #F3F3F3; position: relative;">
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
	<nav class="py2 container z4" style="background-color: white; position: relative;">                              
        
        <div class="clearfix">
        	<div class="col col-4 pl4">
		        <button class="burger-menu__button">
		            <svg class="burger-menu__burger-icon icon-badge-nav icon-badge-nav--md">
		                <use xlink:href="#menu"/>
		            </svg>
		            <svg class="burger-menu__close-icon icon-badge-nav icon-badge-nav--md" style="display: none;">
		                <use xlink:href="#x"/>
		            </svg>
		            <span class="hidden-inline-sm">
		           		Meny
		           	</span>
		        </button>
	    	</div>
	        <div class="col col-6">
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

		<div class="burger-dropdown__container z4 mt2 text-white background-burger-dark-blue" style="display: none;">
			<ul class="pb6 pt3">
				@foreach($nav_site as $topLevelPage)
				<li class="pl4 py2 pr5">
					<a href="{{ get_page_link($topLevelPage->ID) }}" class="h3 burger-dropdown__list-item-link">{{ $topLevelPage->post_title }}</a>
				</li>
				@endforeach
			</ul>
		</div>
	</nav>
</header>