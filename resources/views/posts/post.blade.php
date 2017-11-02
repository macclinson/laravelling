<div class="blog-post">
  <h2 class="blog-post-title">
    <a href="/posts/{{ $post->id }}">
      {{ $post->title }}
    </a>
  </h2>
  <p class="blog-post-meta">{{$post->user->name}} on {{ $post->created_at->toFormattedDateString() }} <a href="#">Chris</a></p>
  <p class="blog-post-meta">{{ $post->body }}</p>

</div><!-- /.blog-post -->
