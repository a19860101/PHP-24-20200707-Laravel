@extends('template.master')

@section('page-title')
<title>Laravel Blog</title>
@endsection
@section('main')
<table class='table'>
    @foreach($posts as $post)
    <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->created_at}}</td>
    </tr>
    @endforeach
</table>
@endsection