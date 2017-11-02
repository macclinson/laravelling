@extends ('layouts.layout')

@section ('content')

<div class="col-sm-8 blog-main">

  <h3>Publish a Post</h3>

  <hr>

  <form method="POST" action="/posts">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" class="form-control" id="title">
    </div>

    <div class="form-group">
      <label for="body">Body</label>
      <textarea name="body" id="body" class="form-control"></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Publish</button>
    </div>
    @include('layouts.errors')
  </form>

</div>

@include('posts.sidebar')

@endsection
