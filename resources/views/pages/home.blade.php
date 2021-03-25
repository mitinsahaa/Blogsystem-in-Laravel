@extends('layout/master')
@section('title','Home')
@include('includes/navbar')
@section('content')

<div class="container">
<h1 class="text-center">All Post</h1>
<div class="blog">
@foreach($blogs as $blog)
<div class="row blog-img">
        <img src="{{ asset('/images/'. $blog->image)}}" class="img-fluid">
</div>
<div class="row blog-title">
    <a href="{{url($blog->author, $blog->slug)}}"><h4 class="ml-4">{{$blog->blogtitle}}</h4></a>
</div>
<div class="row blog-category">
   <span class="ml-4">Category {{$blog->category}}</span>
</div>
<div class="row blog-author">
    <span class="pl-4"> By {{$blog->author}}</span>
</div>
@endforeach
</div>
<div class="d-flex justify-content-center">
    {!! $blogs->links() !!}
</div>
</div>
@stop