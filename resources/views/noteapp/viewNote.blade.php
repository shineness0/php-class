@extends('noteapp.index')


@section('nav')
<div class="container">
  <div class="col-lg-5 mx-auto shadow-sm">
    <div class="p-4 m-4">
      <h3 class="text-center mb-4">{{$data->title}}</h3>
      {{$data->content}}
    </div>
  </div>
</div>
@endsection