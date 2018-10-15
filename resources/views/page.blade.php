@extends('layouts.app')

@section('content')

	<!-- **************************** -->
	<!-- Content with grey background -->
	<!-- **************************** -->
	<div class="relative">
		
		<nav aria-label="Huvudnavigation" class="breadcrumbs container background-dark-blue relative mx-auto pl5 pr5 pt1 pb2 z1">

			@include('partials.new_breadcrumbs')
			
		</nav>
	</div>	
	
	<!-- ************ -->
	<!-- Page content -->
	<!-- ************ -->
	<div class="background-white">
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
						<main class="ml4">
							<div>
								<h1>{{ the_title() }}</h1>
							</div>
							<div id="main">
								@include('partials.new_content-page')
							</div>
						</main>
					</div>
				</div>
			</div>
		</div>	
		
	</div>

@endsection
