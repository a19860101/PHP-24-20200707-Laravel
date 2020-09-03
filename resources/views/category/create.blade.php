@extends('template.master')
@section('main')
<div class="pt-4"></div>
<h2>新增分類</h2>
<form action="">
    @csrf
    <div class="form-group">
        <label for="title">分類標題</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" class="form-control">
        <small class="d-block text-muted">分類的英文名稱</small>
    </div>
        
    <input type="submit" value="新增分類" class="btn btn-primary">
    <input type="button" value="取消" class="btn btn-danger" onclick="history.back()">
</form>
@endsection