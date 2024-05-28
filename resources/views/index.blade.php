@extends('nav')

@section('nav')
<div class="col-md-5 mx-auto mt-5 px-3">
<div class="card">
  <div class="card-body">
    @if(isset($message))
    <p class="alert alert-{{$status ? 'success' : 'danger'}}">{{$message}}</p>
    @endif
    <h4 class="text-center">Register</h4>
    <form action="/register" method="POST">
      @csrf" class="form-control">
      </div>
      <div class="form-group mb-4">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="form-group mb-4">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control">
      </div>
      <div class="form-group mb-4">
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Sign Up</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
@endsection()