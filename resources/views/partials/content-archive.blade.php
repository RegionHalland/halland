
<ul class="list list--none">
  @while (have_posts()) @php(the_post())
    <li class="li--border-bottom">
      <article>
        <header>
          <h3><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h3>
          <p>
            @include('partials.updated-time')
          </p>
        </header>

        <p>{{ get_the_excerpt() }}</p>
      </article>
    </li>
  @endwhile
</ul>
