@extends('layout/master')
@section('title','Edit')
@include('includes/navbar')
@section('content')
@if(Auth::user())
    <div class="container">
    <h4>Welcome {{Auth::user()->username}} to Admin Panel</h4>
    <form action="{{route('admin.update', $editblog->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="Blogtitle">Blog Title</label>
            <input type="text" name="blogtitle" id="" class='form-control' value="{{$editblog->blogtitle}}">
        </div>
        <div class="form-group">
            <label for="Blogcontent">Blog Content</label>
            <textarea name="blogcontent" id="" cols="20" rows="10" class="form-control">{{$editblog->blogcontent}}</textarea>
        </div>
        <div class="form-group">
          By  <input type="text" value="{{$editblog->author}}" readonly style="border:none">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-secondary">Update</button>
        </div>
    </form>
    </div>
@stop
@else
<script>window.location.href="{{url('/login')}}"</script>
@endif