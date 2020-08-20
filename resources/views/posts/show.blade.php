@extends('template.master')

@section('page-title')
<title>Laravel Blog #</title>
@endsection

@section('main-title')
@foreach($posts as $post)
<div class="card mb-4 mt-4">
  <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
  <div class="card-body">
    <h2 class="card-title">{{$post->title}}</h2>
    <p class="card-text">
      {{$post->content}}
    </p>
  </div>
  <div class="card-footer text-muted">
    建立時間 {{$post->created_at}} <br>
    最後更新時間 {{$post->updated_at}}
    <a href="#">Start Bootstrap</a>
  </div>
</div>
@endforeach
@endsection