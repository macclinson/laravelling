<div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav">
      <div class="pull-left">
        <a class="nav-link active" href="/">Home</a>
        <a class="nav-link" href="/posts">Posts</a>
        @if(Auth::check())
        <a class="nav-link" href="/posts/create">Create a Post</a>
        @endif
      </div>
      <div class="pull-right">
        @if(Auth::check())
        <a class="nav-link p" href="/users/profile">{{Auth::user()->name}}</a>
        <a class="nav-link p" href="/logout">Logout</a>
        @endif
        @if(!Auth::check())
        <a class="nav-link p" href="/login">Login</a>
        <a class="nav-link p" href="/register">Sign Up</a>
        @endif
      </div>
    </nav>
  </div>
</div>
