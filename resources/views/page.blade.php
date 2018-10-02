@extends('layouts.app')

@section('content')

	<!-- **************************** -->
	<!-- Content with grey background -->
	<!-- **************************** -->
	<div class="relative">
		
		<nav aria-label="Huvudnavigation" class="container background-dark-blue relative mx-auto pl5 pr5 pt4 pb4 z1">

			@include('partials.new_breadcrumbs')
			
		</nav>
	</div>	
	
	<!-- ************ -->
	<!-- Page content -->
	<!-- ************ -->
	<main class="background-white">
		<div class="background-white">
			<div class="container mx-auto p4">
				<div class="m2 flex flex-wrap">
					<div class="col-12 lg-col-3">
						<div>
							@include('partials.new_nav-sidebar')
						</div>
						<div class="pt4">
							@include('partials.new_content-nav')
						</div>
					</div>
					
					<!-- ************ -->
					<!-- Page content -->
					<!-- ************ -->
					<div class="col-12 lg-col-9">
						<div class="ml4">
							<div>
								<h1>{{ the_title() }}</h1>
							</div>
							<main id="main">
								@include('partials.new_content-page')
							</main>
						</div>
					</div>
				</div>
			</div>
		</div>	
		
	</main>

@endsection
