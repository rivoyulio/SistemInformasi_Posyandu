<nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
  <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
    <h1 class="mb-0 text-primary text-uppercase"><img class="rounded-circle" src="/img/logo.png" alt="" style="width: 60px; height: 60px;">Posyandu</h1>
  </a>
  <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
      <a href="/balita" class="nav-link {{Request::is('balita') ? 'active' : ''}}">Balita</a>
      <a href="/penimbangan" class="nav-link {{Request::is('penimbangan') ? 'active' : ''}}">Penimbangan</a>
      <a href="/perawat" class="nav-link {{Request::is('perawat') ? 'active' : ''}}">Perawat</a>
      <a href="/vitamin" class="nav-link {{Request::is('vitamin') ? 'active' : ''}}">Vitamin</a>
      <a href="/kematian" class="nav-link {{Request::is('kematian') ? 'active' : ''}}">Kematin</a>
      <a href="/jadwal" class="nav-link {{Request::is('jadwal') ? 'active' : ''}}">Jadwal</a>
      @auth
      <li class="nav-item">
        <form class="" action="/logout" method="post">
          @csrf
          <button class="btn btn-dark">Logout</button>
        </form>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="/login">Login</a>
      </li>

      @endauth
    </div>


  </div>
</nav>