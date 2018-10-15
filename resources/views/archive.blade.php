@extends('layouts.app')

@section('content')
	<div class="container m-auto">
		<div class="flex flex-wrap">
		  	<div class="w-full sm:w-6/12 md:w-4/12 lg:w-8/12 mb-4 bg-grey-light">
				<h1>{{ get_the_archive_title() }}</h1>
				<ul>
					@while($archive_posts->have_posts()) @php($archive_posts->the_post())
						<li>
							<h2>{{ get_the_title() }}</h2>
							<p>{!! get_the_excerpt() !!}</p>
						</li>
					@endwhile
				</ul>
			</div>

			<div class="w-full sm:w-6/12 md:w-4/12 lg:w-4/12 mb-4 bg-grey">
				<h2>Kategorier</h2>
				<ul>
					@foreach($categories as $key => $value)
						<li>
							<a class="read-more" href="{{ get_post_type_archive_link(get_post_type()) }}?{{'filter[category]=' .  $value->slug }}">{{ $value->name }}</a>
						</li>
					@endforeach
				</ul>
			</div>

		</div>
	</div>
@endsection