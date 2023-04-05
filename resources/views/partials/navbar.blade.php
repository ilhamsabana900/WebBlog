  {{-- <nav class="navbar navbar-dark bg-info">
    <div class="container">
      <a class="navbar-brand" href="#">Ilhams Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar">
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "About") ? 'active' : '' }} " href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Posts") ? 'active' : '' }} " href="/posts">Blog</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> --}}


  <nav class="navbar navbar-dark bg-info">
    <div class="container">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="navbar-brand" aria-controls="navbarNav" href="#">Ilhams Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title == "Home") ? 'active' : '' }} " href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title == "About") ? 'active' : '' }} " href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title == "Posts") ? 'active' : '' }} "  href="/posts">Blog</a>
        </li>
      </ul>
    </div>
  </nav>