@extends('template.master')

@section('page-title')
<title>Laravel Blog #</title>
@endsection

@section('main-title')
@foreach($posts as $post)
<h1 class="mt-4">{{$post->title}}</h1>
<p class="lead">
    by <a href="#">Author</a>
</p>
<hr>
建立時間 {{$post->created_at}}
<hr>
<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
<hr>
<div>
    {{$post->content}}  
</div>
<hr>
<div class="mb-3">
最後更新時間 {{$post->updated_at}}
</div>
<a href="/" class="btn btn-info">文章列表</a>

@endforeach
@endsection