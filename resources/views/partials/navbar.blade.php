<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container ">
      <a class="navbar-brand" href="/">Klinik Riduwan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        

        <ul class="navbar-nav ms-auto">
        @auth
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"><i class="bi bi-layout-text-sidebar-reverse"></i>My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
              </form>
            </li>
          </ul>
        </li>

        @else
        
        @endauth
      </ul>

      </div>
    </div>
  </nav>