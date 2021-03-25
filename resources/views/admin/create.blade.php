@extends('layout/master')
@section('title','Create Blog')
@include('includes/navbar')
@section('content')
@if(Auth::user())
    <div class="container">
    <h4>Welcome {{Auth::user()->username}} to Admin Panel</h4>
        <h2 class="text-center">Create Blog</h2>
        <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Blog Title</label>
            <input type="text" name="title" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">Blog Content</label>
            <textarea name="content" id="" cols="20" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="" class="custom-select">
                <option value="">Select</option>
                <option value="Electronics">Electronics</option>
                <option value="Food">Food</option>
                <option value="Sports">Sports</option>
                <option value="Personal">Personal</option>
                <option value="Nature">Nature</option>
                <option value="Fashion">Fashion</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Fileupload">File Upload</label>
            <input type="file" name="file" id="">
        </div>
        By <input type="text" name="author" class="pb-4" value="{{Auth::user()->username}}" readonly style="border:none">
        <div class="form-group">
            <button class="btn btn-danger">Create Post</button>        
        </div>
        </form>
    </div>
    @else
    <script>window.location = "/login";</script>
    @endif
@stop