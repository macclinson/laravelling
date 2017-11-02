@extends ('layouts.layout')

@section ('content')
<div class="col-sm-8 blog-main">

  <h3>Register</h3>

  <form method="POST" action="/register">
    {{ csrf_field() }}
    <div class="form-group">
      <input type="text" class="form-control" name="name" placeholder="Enter Name" required />
    </div>
    <div class="form-group">
      <input type="email" class="form-control" name="email" placeholder="Enter Email" required />
    </div>
    <div class="form-group">
      <input type="password" class="form-control" name="password" placeholder="Choose Password" required />
    </div>
    <div class="form-group">
      <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required />
    </div>
    <div class="form-group">
      <button class="btn btn-primary" type="submit"> Register</button>
    </div>
    @include('layouts.errors')
  </form>
</div>
@endsection
