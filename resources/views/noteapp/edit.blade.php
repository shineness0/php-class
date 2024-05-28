@extends('noteapp.index')


@section('nav')
<div class="container">
  <div class="col-lg-5 mx-auto shadow-sm">
    <div class="p-4 m-4">
      <h3 class="text-center mb-4">Edit Note</h3>
      <form action="/noteapp/display/edit/{{$data->note_id}}" method="post">
        @csrf
        <div class="form-group mb-4">
          <input class="form-control" type="text" name="title" placeholder="Title" value="{{$data->title}}">
        </div>
        <div class="form-group mb-4">
          <textarea class="form-control" name="content" cols="30" rows="10" placeholder="Enter note">{{ $data->content }}</textarea>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-primary btn-lg">Update Note</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection