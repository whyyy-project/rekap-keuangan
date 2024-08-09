            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="<?= base_url() ?>" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-success mb-0"><img src="<?= base_url() ?>favicon.png" width="15%" alt="E-Financial"></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="<?= base_url() ?>assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?= session()->get('nama') ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <button data-bs-toggle="modal" data-bs-target="#logoutModal" class="dropdown-item">Log Out</button>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- navigasi -->
            <div class="pt-2 mx-4">
              <?php empty($navigasi) ? $navigasi = "» Dashboard" : $navigasi ?>
              <?= $navigasi ?>
            </div>
            <!-- navigasi end -->