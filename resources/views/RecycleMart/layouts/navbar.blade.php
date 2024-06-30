<nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-md">
        <!-- Navigation Bar -->
        <a class="navbar-brand" href="#">Recycle Mart</a>

        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="#">Keranjang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
        </ul>

        <div class="mb-3">
          <input type="text" class="form-control" id="search" placeholder="Cari di sini...">
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#SideBar" aria-controls="SideBar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Side Bar -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="SideBar" aria-labelledby="SideBarLabel">
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-4">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
