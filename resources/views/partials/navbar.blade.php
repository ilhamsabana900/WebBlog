
  <nav class="navbar navbar-dark bg-info">
    <div class="container">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="navbar-brand" aria-controls="navbarNav" href="#">Ilhams Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "home") ? 'active' : '' }} " href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "about") ? 'active' : '' }} " href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "posts") ? 'active' : '' }} "  href="/posts">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "category") ? 'active' : '' }} "  href="/categories">Categories</a>
        </li>
      </ul>
    </div>
  </nav>