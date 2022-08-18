<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="/">Telkom Akses</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Home</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link" href="/dashboard/mitra" role="button" id="navbarDropdown" data-bs-toggle="dropdown-menu" aria-expanded="false" data-bs-target="dropdown-menu">
              Welcome Back, {{ auth()->user()->nama_mitra }}
            </a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="post">
              @csrf
              <button type="submit"  class="nav-link logout"><i class="bi bi-box-arrow-in-left"></i> >
              </button>
            </form>
        </li>
          @else
          <li class="nav-item">
              <a href="login" class="nav-link login"><i class="bi bi-box-arrow-in-left"></i>Log in</a>
          </li>
          @endauth
        </ul>
        
      </div>
    </div>
  </nav>