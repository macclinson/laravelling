@extends ('layouts.layout')

@section ('content')

<div class="col-sm-8 blog-main">
  <h1>{{ $post->title}}</h1>

  @if(count($post->tags))
    @foreach($post->tags as $tag)
      <p>
        <a href="/posts/tags/{{$tag->name}}">
          {{$tag->name}}
        </a>
      </p>
    @endforeach
  @endif

  <p>{{ $post->body}}</p>
  @foreach($post->comments as $comment)
  <ul class="list-group">
    <li class="list-group-item">
        <p class="text-right"><em>{{ $comment->created_at->diffForHumans() }}</em></p>
        {{ $comment->body }}
    </li>
  </ul>
  @endforeach

    <hr>
  <!-- Add a comment form -->
  <div class="add-comments">
    <form method="POST" action="/posts/{{$post->id}}/comments">
      {{ csrf_field()}}

      <div class="form-group">
        <textarea class="form-control" name="body" required></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Add Comment</button>
      </div>
      @include('layouts.errors')

    </form>
  </div>
</div>

@endsection
