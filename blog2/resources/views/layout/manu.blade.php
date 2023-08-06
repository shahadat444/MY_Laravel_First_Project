<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid mt-2 p-2">
    <a class="navbar-brand" href="{{url('/')}}"><img class="siteLogo" src="{{asset('images/logo.svg')}}" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/Portfolio')}}">PORTFOLIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/Service')}}">SERVICE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/About')}}">ABOUT</a>
        </li>
      </ul>
    </div>
  </div>
</nav>