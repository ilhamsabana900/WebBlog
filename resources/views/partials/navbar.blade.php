
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


      
    <ul class="navbar-nav ms-auto navbar-dark">
        @auth
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Welcome Back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>

            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i></i>Logout</button>
              </form>
            </li>
          </ul>
        </li>
       
  
        @else

        <li class="nav-item">
          <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>Log In</a>
        </li>

        @endauth
    </ul>

      
    </div>
  </nav>