@if(isset($nav_site) && !empty($nav_site))
<div class="">
	<ul class="list-reset">
		@each('partials.nav-mobile-child-list', $nav_site, 'item')
	</ul>
	<div class="p-4 bg-grey-lightest border-t border-grey-lighter">
		<a class="flex items-center text-black no-underline mr-6" target="_blank" href="https://etjanster.intra.regionhalland.se/">
			<span class="inline-flex h-8 w-8 rounded-full bg-green-light items-center justify-center mr-2">
				<svg class="inline-flex h-4 w-4 align-middle">
					<use xlink:href="#user"/>
				</svg>
			</span>E-tjänster
		</a>
	</div>
	<div class="p-4 bg-grey-lightest border-t border-grey-lighter">
		<a class="flex items-center text-black no-underline hover:underline focus:underline mr-6" id="" onclick="toggleBar();" href="#">
			<span class="inline-flex h-8 w-8 rounded-full bg-green-light items-center justify-center mr-2">
				<svg class="inline-flex h-4 w-4 align-middle">
					<use xlink:href="#volume-2"/>
				</svg>
			</span>Talande Webb
		</a>
	</div>
</div>
@endif