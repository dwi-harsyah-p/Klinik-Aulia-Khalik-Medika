<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark bg-success" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Home</div>
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    @can('dokter-pasien')
                    <a class="nav-link collapsed {{ Request::is('antrian*') || Request::is('pasien*') || Request::is('records*') ? 'active' : '' }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-clinic-medical"></i></div>
                        Klinik
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                    @endcan
                            @can('pasien')
                            <a class="nav-link {{ Request::is('antrian*') ? 'active' : '' }}" href="/antrian">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-nurse"></i></div>
                                Antrian
                            </a>
                            @endcan
                            @can('dokter')                        
                            <a class="nav-link {{ Request::is('pasien*') ? 'active' : '' }}" href="/pasien">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-medical"></i></div>
                                Data Pasien
                            </a>         
                            @endcan
                            @can('dokter-pasien')           
                            <a class="nav-link {{ Request::is('records*') ? 'active' : '' }}" href="/records">
                                <div class="sb-nav-link-icon"><i class="fa fa-stethoscope"></i></div>
                                Rekam Medis
                            </a>
                            @endcan
                            {{-- <a class="nav-link" href="/akun">Account</a> --}}
                    @can('dokter-pasien')
                        </nav>
                    </div>                    
                    @endcan
                    @can('farmasi')                        
                    <div class="sb-sidenav-menu-heading">Farmasi</div>                    
                    <a class="nav-link {{ Request::is('medicines*') ? 'active' : '' }}" href="/medicines">
                        <div class="sb-nav-link-icon"><i class="fas fa-pills"></i></div>
                        Obat                       
                    </a>      
                    @endcan       
                    
                    @can('kasi')
                    <div class="sb-sidenav-menu-heading">Report</div>                    
                    <a class="nav-link {{ Request::is('reports') ? 'active' : '' }}" href="/report">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Laporan
                    </a>                                                                
                    @endcan    
                    @can('admin')
                    <div class="sb-sidenav-menu-heading">Master</div>
                    <a class="nav-link {{ Request::is('user*') ? 'active' : '' }}" href="/user">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                        User
                    </a>                                                             
                    @endcan   

                </div>
            </div>
            <div class="sb-sidenav-footer bg-success">
                <div class="small">Logged in as:</div>
             {{ auth()->user()->biodata->name }}
            </div>
        </nav>
    </div>