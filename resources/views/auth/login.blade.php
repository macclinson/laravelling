@extends ('layouts.layout')

@section ('content')
<div class="col-sm-8 blog-main">

  <h3>Login</h3>
  <form method="POST" action="/login">
    {{ csrf_field() }}
    <div class="form-group">
      <input type="email" class="form-control" name="email" placeholder="Enter Email" required />
    </div>
    <div class="form-group">
      <input type="password" class="form-control" name="password" placeholder="Enter Password" required />
    </div>
    <div class="form-group">
      <button class="btn btn-primary" type="submit"> Login</button>
    </div>
    @include('layouts.errors')
  </form>

</div>
@endsection
