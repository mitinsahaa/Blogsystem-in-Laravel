<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><h2>Blog</h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    @if(Auth::user())
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin')}}">Admin Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.create')}}">Add Blog</a>
      </li>
      <li class="nav-item logout">
        <a href="{{url('/logout')}}" class="logout">Logout</a>
      </li>
      @else
      <li class="nav-item pt-4">
        <a href="{{url('/')}}">Home</a>
      </li>
      <li class="nav-item pt-3">
        <a class="nav-link" href="{{url('/login')}}">Login</a>
      </li>
      <li class="nav-item pt-4">
        <a href="{{url('/signup')}}" class="logout">Sign Up</a>
      </li>
      @endif
    </ul>
  </div>
</nav>