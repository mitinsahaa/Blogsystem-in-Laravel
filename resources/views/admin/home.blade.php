@extends('layout/master')
@section('title','Admin Home')
@include('includes/navbar')
@section('content')
@if(Auth::user())
<div class="container">
<h4>Welcome {{Auth::user()->username}} to Admin Panel</h4>
        @if(Session::has('success'))
        <div class="alert alert-success">
        {{Session::get('success')}}
        </div>
        @endif
<table class="table table-responsive">
        <tr>
            <th>Blog Title</th>
            <th>Blog Category</th>
            <th>Blog Content</th>
            <th>Blog Author</th>
            <th colspan="2">Action</th>
        </tr>
    @foreach($adminblog as $adminhome)
    <tr>
        <td>{{$adminhome->blogtitle}}</td>
        <td>{{$adminhome->category}}</td>
        <td>{{$adminhome->blogcontent}}</td>
        <td>{{$adminhome->author}}</td>
        <td><a href="{{route('admin.edit',$adminhome->id)}}" class="btn btn-info">Edit</a></td>
        <td><form action="{{route('admin.destroy',$adminhome->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
        </form></td>
    </tr>
    @endforeach
    </table>
    </div>
    @else
    <script>window.location.href="{{url('/login')}}"</script>
    @endif
</body>
</html>