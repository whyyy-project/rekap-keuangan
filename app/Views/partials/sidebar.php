        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="<?= base_url() ?>" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-success"><img src="<?= base_url() ?>favicon.png" width="25%" style="margin-right:10px" alt="<?= $namaSistem ?>"><?= $namaSistem ?></h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?= base_url() ?>assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                  <?php empty($page) ? $page = "404" : $page ?>
                    <a href="<?= base_url() ?>" class="nav-item nav-link <?= $page == "Dashboard" ? "active" : "" ?>"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                          <i class="fa fa-money-bill-trend-up me-2"></i>Uang Masuk</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?= base_url() ?>" class="dropdown-item"><i class="fa-solid fa-people-line"></i> Taawuf</a>
                            <a href="<?= base_url() ?>" class="dropdown-item"><i class="fa-solid fa-hand-holding-dollar"></i> Lain-Lain</a>
                            <a href="<?= base_url() ?>" class="dropdown-item"><i class="fa-solid fa-vault"></i> Rincian</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-money-bill-transfer me-2"></i>Uang Keluar</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?= base_url() ?>" class="dropdown-item"><i class="fa-solid fa-money-bill-transfer"></i> Tambah</a>
                            <a href="<?= base_url() ?>" class="dropdown-item"><i class="fa-solid fa-filter-circle-dollar"></i> Rincian</a>
                        </div>
                    </div>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?= $page == "Santri" ? "active" : "" ?>" data-bs-toggle="dropdown"><i class="fa-duotone fa-solid fa-users"></i> Santri</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?= base_url() ?>" class="dropdown-item"><i class="fa-solid fa-people-group"></i> Data Santri</a>
                            <a href="<?= base_url() ?>" class="dropdown-item"><i class="fa-solid fa-person-shelter"></i> Komplek</a>
                            <a href="<?= base_url() ?>" class="dropdown-item"><i class="fa-regular fa-id-badge"></i> Jenis Santri</a>
                            <a href="<?= base_url() ?>" class="dropdown-item"><i class="fa-solid fa-user-plus"></i> Biaya Santri Baru</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?= $page == "Bendahara" ? "active" : "" ?>" data-bs-toggle="dropdown"><i class="fa-regular fa-address-book"></i> Bendahara</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?= base_url() ?>" class="dropdown-item">Bendahara Tingkat 1</a>
                            <a href="<?= base_url() ?>" class="dropdown-item">Bendahara Tingkat 2</a>
                            <a href="<?= base_url() ?>" class="dropdown-item">Bendahara Tingkat 3</a>
                        </div>
                    </div>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
