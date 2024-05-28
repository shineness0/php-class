@extends('noteapp.index')


@section('nav')
<div class="container">
  <div class="col-lg-5 mx-auto shadow-sm">
    <div class="p-4 m-4">
      <h3 class="text-center mb-4">Note Lists</h3>
     @foreach ($data as $item)
      <div>
        <h4>{{$item->title}}</h4>
      </div>
      <div class="col">
        <a href="/noteapp/display/edit/{{$item->note_id}}" class="btn btn-success">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
        <a href="/noteapp/display/{{$item->note_id}}" class="btn btn-warning">View</a>
      </div>
     @endforeach
    </div>
  </div>
</div>
@endsection