@extends('template.master')

@section('page-title')
<title>Laravel Blog 建立新文章</title>
@endsection

@section('main')
<h1 class="my-4">建立文章
</h1>
<!-- <form action="/posts" method="post"> -->
<form action="{{route('posts.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="title">文章標題</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="content">文章內容</label>
        <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <input type="submit" value="新增文章" class="btn btn-primary">
    <input type="button" value="取消" class="btn btn-danger" onclick="history.back()">
</form>

<script src="https://cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>
@endsection
