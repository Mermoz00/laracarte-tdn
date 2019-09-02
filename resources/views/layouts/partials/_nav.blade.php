<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('root_path')}}">Laracarte</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{set_active_route('root_path')}}">
        <a class="nav-link" href="{{route('root_path')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{set_active_route('about_path')}}">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Artisans</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Planet
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="www.Laravel.com">Laravel.com</a>
          <a class="dropdown-item" href="Laravel.io">Laravel.io</a>
          <a class="dropdown-item" href="Laracasts.com">Laracasts</a>
          <a class="dropdown-item" href="Larajobs.com">Larajobs</a>
          <a class="dropdown-item" href="Laravel-News.com">Laravel News</a>
          <a class="dropdown-item" href="Larachat.com">Larachat</a>
        </div>
      </li>
      <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Register</a></li>
    </ul>
  </div>
</nav>