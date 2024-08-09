<?php $this->extend('template/template') ?>
<?php $this->section('content')  ?>
        <!-- Content Start -->
        <div class="content">
        <!-- navbar -->
        <?= $this->include('partials/navbar') ?>
        <!-- navbar end  -->
            <!-- Content Start -->
            <div class="container-fluid py-2 px-4">
            <div class="row g-4">
                    <div class="col-sm-6 col-xl-3 col-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-center p-4">
                            <i class="fa-solid fa-mars fa-3x text-success"></i>
                            <div class="ms-3">
                                <p class="mb-2">Santri Putra</p>
                                <h6 class="mb-0">500</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 col-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-center p-4">
                            <i class="fa-solid fa-venus fa-3x text-success"></i>
                            <div class="ms-3">
                                <p class="mb-2">Santri Putri</p>
                                <h6 class="mb-0">400</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 col-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-center p-4">
                            <i class="fa-solid fa-venus-mars fa-3x text-success"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Santri</p>
                                <h6 class="mb-0">900</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 col-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-center p-4">
                            <i class="fa-solid fa-file-invoice-dollar fa-3x text-success"></i>
                            <div class="ms-3">
                                <p class="mb-2">Belum Lunas</p>
                                <h6 class="mb-0">900</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="container-fluid">
  <div class="row bg-light rounded pt-2 px-12 mx-1 mt-3">
  
  <div class="col-12 d-flex justify-content-between align-items-center">
  <div class="col">
  <h5>Data Uang Keluar</h5>
  </div>
  <div class="col d-inline text-end">
    <a href="<?= base_url() ?>" class="btn btn-outline-success"><i class="fa-solid fa-download mr-3"></i> Export CSV</a>
    <a href="<?= base_url() ?>" class="btn btn-outline-success"><i class="fa-solid fa-upload mr-3"></i> Upload Santri</a>
    <a href="<?= base_url() ?>" class="btn btn-outline-success"><i class="fa-solid fa-user-plus mr-3"></i> Tambah Santri</a>

  </div>
</div>
    
  
  <table id="tabel1" class="table table-striped" style="width:100%">
      <thead>
          <tr>
            <th>NIK</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Tahun Masuk</th>
            <th>Komplek</th>
            <th>Jenis Santri</th>
            <th>Biaya Tahunan</th>
            <th>Santri Baru</th>
            <th>Opsi</th>
          </tr>
      </thead>
      <tbody>
        <?php 
        $dataSantri = $dataSantri ?? [];
        foreach($dataSantri as $data) : ?>
          <tr>
            <td><?= esc($data['nik'] ?? '-') ?></td>
            <td><?= $data['nis'] ?></td>
            <td><?= esc($data['nama'] ?? '-') ?></td>
            <td><?= esc($data['jenis_kelamin'] ?? '-') ?></td>
            <td><?= date('d-m-Y H:i:s', strtotime($data['tanggal_lahir'])) ?></td>
            <td><?= esc($data['tahun_masuk'] ?? '-') ?></td>
            <td><?= esc($data['komplek'] ?? '-') ?></td>
            <td><?= esc($data['jenis'] ?? '-') ?></td>
            <td><?= esc($data['js_biaya'] ?? '-') ?></td>
            <td><?= esc($data['sb_jenis'] ?? '-') ?>(<span class="text-success"><?= esc($data['sb_biaya'] ?? '-') ?></span>)</td>
            <td>
              <div class="d-inline-flex">
                <a href="#" class="btn btn-outline-success" title="Ubah"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="#" class="btn btn-outline-info" title="Ubah"><i class="fa-regular fa-circle-question"></i></a>
                <a href="#" class="btn btn-outline-danger" title="Ubah"><i class="fa-regular fa-trash-can"></i></a>
              </div>
            </td>
          </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
  





            <!-- Content End -->

        <!-- Content End -->
    <?php $this->endSection(); ?>
