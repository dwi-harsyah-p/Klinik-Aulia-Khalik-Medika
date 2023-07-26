<nav class="sb-topnav navbar navbar-expand navbar-dark bg-success">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="/dashboard"><img src="/img/LOGO KLINIK.jpg" class="rounded" alt="" width="30" height="24"> Aulia Khalik</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>            
    <!-- Navbar Search-->
    <!-- Navbar-->    
    <div class="ms-auto">
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/profile">Profile</a></li>
                    <li>
                        <button type="button" class="dropdown-item" data-toggle="modal" data-target="#ModalPassword">
                            Change Password
                          </button></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button class="dropdown-item" type="submit">Logout</button> 
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>