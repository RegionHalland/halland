@extends('layouts.app')

@section('content')
	<h1>{{ get_the_archive_title() }}</h1>
	<ul>
		@foreach($archive_posts as $key => $value)
			<li>
				<h2>{{ $value->post_title }}</h2>
				<p>{{ $value->post_content }}</p>
			</li>
		@endforeach
	</ul>
@endsection