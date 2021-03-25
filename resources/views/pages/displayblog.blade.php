<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$showblog->blogtitle}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    @include('includes/navbar')
    <div class="container">
    @if(Session::has('added'))
    <div class="alert alert-success">
        {{Session::get('added')}}
    </div>
    @endif
        <div class="row">
        <img src="{{asset('/images/'. $showblog->image)}}" alt="" class="img-fluid p-5 ml-5">
        </div>
        <div class="row">
            <h1>{{$showblog->blogtitle}}</h1>
        </div>
        <div class="row">
        <span class="text-secondary pb-5 pt-2">By {{$showblog->author}}</span>   <span class="ml-5 pt-2">{{\Carbon\Carbon::parse($showblog->created_at)->format('d M Y')}}</span>
        </div>
        <div class="row pb-5" style="font-size: 20px;">
            {{$showblog->blogcontent}}
        </div>
        <div class="comments p-5">
            @if($errors->has('comments'))
    <div class="text-danger">{{ $errors->first('comments') }}</div>
        @endif
        <form action="{{url('addcomment')}}" method="POST">
        @csrf
            <textarea name="comments" id="" cols="10" rows="10" class="form-control"></textarea>
            @if(Auth::user())
            <input type="hidden" name="blog_id" value="{{$showblog->id}}">
            <input type="hidden" name="user" id="" value="{{Auth::user()->username}}">
            <button class="btn btn-primary mt-4">Add Comment</button>
            </form>
            @else
            <strong class="pb-5">Please Login with Username and Password to Comment on this Post</strong><br>
            <button type="button" class="btn btn-primary disabled">Add Comment</button><br>
            @endif
            <strong>Comments </strong>
            @if($showblog->comments)
            <span style="font-weight:10px">{{(count($showblog->comments))}}</span>
            @foreach($showblog->comments as $comment)
            <p style="font-size:18px">{{$comment->comment}}</p>
            <p>By {{$comment->commentuser}}</p>
            @endforeach
            @endif
        </div>
    </div>
</body>
</html>