<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog by Author</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="container">
    <table class="table table-responsive table-border">
        <tr>
            <th>Blog Title</th>
            <th>Blog Content</th>
        </tr>
        @foreach($authorblog as $view)
        <tr>
            <td>{{$view->blogtitle}}</td>
            <td>{{$view->blogcontent}}</td>
        </tr>
        @endforeach
    </table>
    </div>
</body>
</html>