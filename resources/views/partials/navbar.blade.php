<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark position-absolute top-0 w-100">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/">Sistem SKK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('tentang') ? 'active' : '' }}" href="/tentang">Tentang SKK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('perhitungan') ? 'active' : '' }}" href="/perhitungan">Perhitungan Poin SKK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('aturan') ? 'active' : '' }}" href="/aturan">Aturan Penilaian</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('pengelompokkan') ? 'active' : '' }}" href="/pengelompokkan">Pengelompokan SKK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('panduan') ? 'active' : '' }}" href="/panduan">Panduan SKK</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">Logout <span data-feather="log-out"></span></button>
              </form>
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link fw-bold" href="/sesi">
            <i class="bi bi-box-arrow-in-right me-1"></i>
            Login
          </a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>