{{--
  Template Name: Fullbredd
--}}

@extends('layouts.app')
@section('content')

  @while(have_posts()) @php(the_post())
	<div class="container mx-auto pt-8 md:pt-16">
		<div class="w-full mx-auto">
		<h1>{{ the_title() }}</h1>
		{!! the_content() !!}
		</div>
	</div>
  @endwhile
xxxx
@endsection
