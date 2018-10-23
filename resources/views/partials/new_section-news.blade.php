@foreach($news_by_category as $key => $categoryNews)
<div class="col-12 lg-col-4">
	<div class="pb3 pl3 pr3 pt0">
		<div class="pb2">
			<h2 class="h4"><a href="{{ $categoryNews -> guid }}">{{ $categoryNews -> post_title }}</a></h2>
		</div>
		<div class="mb2 small">
			<time datetime="{{ str_limit($categoryNews -> post_date, $limit = 10, $end = '') }}">{{ str_limit($categoryNews -> post_date, $limit = 10, $end = '') }}</time>
		</div>
		<div class="">
			{{ $categoryNews -> post_excerpt }}
		</div>
	</div>
</div>
@endforeach

