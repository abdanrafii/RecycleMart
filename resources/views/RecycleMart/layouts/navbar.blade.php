<nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-md">
        <!-- Navigation Bar -->
        <div class="row align-items-center">
            <div class="col-auto" style="flex: 0 0 60px;">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#SideBar"
                    aria-controls="SideBar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="col-auto" style="flex: 0 0 155px;">
                <a class="navbar-brand" href="#">Recycle Mart</a>
            </div>

            <div class="col">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Keranjang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                </ul>
            </div>

            <div class="col-auto d-flex flex-column align-items-end" style="flex: 0 0 150px;">
                <div>
                    <input type="text" class="form-control search" id="search" placeholder="Cari di sini...">
                </div>
            </div>
        </div>

        <!-- Side Bar -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="SideBar" aria-labelledby="SideBarLabel">
            <div class="offcanvas-body" style="padding:30px">
                <ul class="navbar-nav d-flex flex-column justify-content-between h-100">
                    <div>
                        <!-- Edit Profil -->
                        <div class="row align-items-center" style="margin-bottom: 40px">
                            <div class="col-auto" style="flex: 0 0 100px;">
                                <div class="card image profil" id="logo">
                                    <img src="{{ asset('build/assets/logo.png') }}" class="card-img">
                                </div>
                            </div>
                            <div class="col" style="color:white; font-size:14pt; font-weight:bold">
                                Username<br>
                                <a href="#" class="sidebar-nav">Edit Profil</a>
                            </div>
                        </div>
                
                        <!-- Edit Toko -->
                        <div class="row align-items-center">
                            <div class="col-auto" style="flex: 0 0 100px;">
                                <div class="card image profil" id="logo">
                                    <img src="{{ asset('build/assets/logo.png') }}" class="card-img">
                                </div>
                            </div>
                            <div class="col" style="color:white; font-size:14pt; font-weight:bold">
                                Nama Toko<br>
                                <a href="#" class="sidebar-nav">Setup Toko</a>
                            </div>
                        </div>
                    </div>
                
                    <!-- Logout -->
                    <div class="row align-items-center mt-auto">
                        <a href="#" class="logout">Logout</a>
                    </div>
                </ul>
            </div>
        </div>
    </div>

</nav>
