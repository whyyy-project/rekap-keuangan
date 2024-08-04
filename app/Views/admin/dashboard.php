
<?php $this->extend('template/template') ?>
<?php $this->section('content')  ?>
        <!-- Content Start -->
        <div class="content">
        <!-- navbar -->
        <?= $this->include('partials/navbar') ?>
        <!-- navbar end  -->
            <!-- Content Start -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid py-2 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3 col-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-center p-4">
                            <i class="fa fa-money-bill-trend-up fa-3x text-success"></i>
                            <div class="ms-3">
                                <p class="mb-2">Masuk <?= date("Y") ?></p>
                                <h6 class="mb-0">Rp. 10.000.000</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 col-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-center p-4">
                            <i class="fa fa-money-bill-transfer fa-3x text-success"></i>
                            <div class="ms-3">
                                <p class="mb-2">Keluar <?= date("Y") ?></p>
                                <h6 class="mb-0">Rp. 10.000.000</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 col-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-center p-4">
                            <i class="fa fa-money-check-dollar fa-3x text-success"></i>
                            <div class="ms-3">
                                <p class="mb-2">Masuk</p>
                                <h6 class="mb-0">Rp. 10.000.000</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 col-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-center p-4">
                            <i class="fa fa-file-invoice-dollar fa-3x text-success"></i>
                            <div class="ms-3">
                                <p class="mb-2">Keluar</p>
                                <h6 class="mb-0">Rp. 10.000.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->

            <!-- <div class="container-fluid pt-1 px-4">
              <div class="row vh-100 bg-light rounded mx-0 p-2 pt-3">
                <h5>Lorem ipsum dolor sit amet.</h5>
              </div>
            </div> -->
            <!-- Content End -->

            <?= $this->include('admin/datatable-example') ?>
        <!-- Content End -->
    <?php $this->endSection(); ?>
