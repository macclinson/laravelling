@extends ('layouts.layout')

@section ('content')
  <div class="col-xs-12">
    <h1 class="text-center"> Profile</h1>

    <div class="form-group">
      <label>Name: </label>
      <input type="text" class="form-control" value="{{Auth::user()->name}}" readonly>
    </div>
    <div class="form-group">
      <label>Email: </label>
      <input type="text" class="form-control" value="{{Auth::user()->email}}" readonly>
    </div>
  </div>
@endsection
