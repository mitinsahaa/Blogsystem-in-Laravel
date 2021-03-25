    @extends('layout/master')
    @section('title', 'Signup')
    @section('content')
    <div class="container">
    @if(Session::has('msg'))
    <div class="alert alert-success">
    {{Session::get('msg')}}
    </div>
    @endif
        <h2>Sign Up</h2>
        <form action="{{url('/signup')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="FullName">Full Name</label>
            <input type="text" name="fullname" id="" class="form-control">
            <span class="text-danger">@error('fullname'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="" class="form-control">
            <span class="text-danger">@error('username'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="" class="form-control">
            <span class="text-danger">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="" class="form-control">
            <span class="text-danger">@error('password'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Sign Up</button>
        </div>
        </form>
        <a href="{{url('/login')}}">Already a Member, Login Here</a>
    </div>
</body>
</html>
@stop