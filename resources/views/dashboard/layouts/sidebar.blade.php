<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><img class="rounded-circle" src="/img/logo.png" alt="" style="width: 50px; height: 50px;"></i>Posyandu</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="/img/foto.jpeg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Rivo Yulio</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/dashboard" class="nav-link {{Request::is('dashboard') ? 'active' : ''}}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="/balitadashboard" class="nav-link {{Request::is('balitadashboard') ? 'active' : ''}}"><i class="bi bi-person"></i> Balita</a>
                    <a href="/penimbangandashboard" class="nav-link {{Request::is('penimbangandashboard') ? 'active' : ''}}"><i class="bi bi-clipboard-data"></i> Penimbangan</a>
                    <a href="/perawatdashboard" class="nav-link {{Request::is('perawatdashboard') ? 'active' : ''}}"><i class="bi bi-person-plus"></i> Perawat</a>
                    <a href="/vitamindashboard" class="nav-link {{Request::is('vitamindashboard') ? 'active' : ''}}"><i class="bi bi-bag-plus"></i> Vitamin</a>
                    <a href="/kematiandashboard" class="nav-link {{Request::is('kematiandashboard') ? 'active' : ''}}"><i class="bi bi-calendar-x-fill"></i> Kematian</a>
                    <a href="/jadwaldashboard" class="nav-link {{Request::is('jadwaldashboard') ? 'active' : ''}}"><i class="far fa-file-alt me-2"></i>Jadwal</a>
                    @auth
                    <form class="" action="/logout" method="post">
                     @csrf
                    <button class="btn btn-dark nav-item nav-link" >Logout</button>
                    </form>
                     @endauth
                    
                </div>
            </nav>
        </div>