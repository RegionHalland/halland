@extends('layouts.app')

@section('content')
	<div class="container m-auto">
		<div class="flex flex-wrap">
			<div class="w-full sm:w-6/12 md:w-4/12 lg:w-4/12 mb-4 bg-grey">
				<h2>Fler nyheter</h2>
				<ul>
					
				</ul>
			</div>
			<div class="w-full sm:w-6/12 md:w-4/12 lg:w-8/12 mb-4 bg-grey-light">
				@while(have_posts()) @php(the_post())
					<h1>{{ get_the_title() }}</h1>
					<p>{{ the_content() }}</p>
				@endwhile
			</div>
		</div>
	</div>
@endsection
