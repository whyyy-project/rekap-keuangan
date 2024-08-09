<div class="container-fluid">
  <div class="row bg-light rounded pt-2 px-12 mx-1 mt-3">
  
  <div class="col-12 d-flex justify-content-between align-items-center">
  <div class="col">
  <h5>Data Uang Masuk</h5>
  </div>
  <div class="col d-inline text-end">
    
    <a href="<?= base_url() ?>" class="btn btn-outline-success d-inline-flex">Export PDF</a>
    <a href="<?= base_url() ?>" class="btn btn-outline-success d-inline-flex">Export CSV</a>
    <button data-bs-toggle="modal" data-bs-target="#modalFilterUangMasuk" class="btn btn-outline-primary d-inline-flex">Filter</button>

  </div>
</div>
    
  
  <table id="tabelUangMasuk" class="table table-striped" style="width:100%">
      <thead>
          <tr>
            <th>Tanggal</th>
            <th>Pembayaran</th>
            <th>Jenis</th>
            <th>Nama</th>
            <th>Keterangan</th>
            <th>Penerima</th>
          </tr>
      </thead>
      <tbody class="text-center">
        <?php 
        $dataUangMasuk = $dataUangMasuk ?? [];
        foreach($dataUangMasuk as $row): ?>
          <tr>
            <td data-sort="<?= $row['date'] ?>"><?= date('d-m-Y H:i:s', strtotime($row['date'])) ?></td>
            <td data-sort="<?= $row['nominal'] ?>">Rp. <?= number_format($row['nominal'], 0, ',', '.') ?></td>
              <?php
              $jenis = esc($row['jenis'] ?? '-');
              switch($jenis){
                case "donatur":
                  $c = "primary";
                  $j = "Donatur";
                  break;
                case "baru":
                  $j = "Santri Baru";
                  $c = "success";
                  break;
                case "tahunan":
                  $j = "Taawun";
                  $c = "success";
                  break;
                case "donasi":
                  $j = "Donasi";
                  $c = "info";
                  break;
                default:
                $j = esc($row['k_jenis'] ?? '-');
                $c = "danger";
              }
              ?>
            <td>
              <span class="badge text-bg-<?= $c ?>"><?= $j ?></span>
            </td>
            <td><?= esc($row['nama']) ?></td>
              <td>
                <?php 
                if($c == "success"){
                  $param = substr($row['keterangan'], 0, 1);
                  switch ($param){
                    case "-":
                      $ketParam = "Kurang";
                      break;
                    case "=":
                      $ketParam = "Lunas";
                      break;
                    case "+":
                      $ketParam = "Lebih";
                      break;
                    default:
                      $ketParam = "Status Eror";
                      break;
                  }
                  $uang = substr($row['keterangan'], 1);
                  $keterangan = $ketParam . " " . esc("Rp. ".number_format($uang, 0, ',', '.') ?? '-');
                }else{
                  $keterangan = esc($row['keterangan'] ?? '-');
                }
                ?>
                <?= $keterangan ?>
              </td>
              <td><?= esc($row['penerima'] ?? session()->get('nama')) ?></td>
          </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
  
<!-- modal filter uang masuk -->
<div class="modal fade" id="modalFilterUangMasuk" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalFilterUangMasukLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content card">
      <p class="cookieHeading">Filter Uang Masuk</p>
      <p>Filter Uang Masuk Berdasarkan</p>
      <p>Tanggal</p>
      <p>Jenis</p>
      <div class="buttonContainer text-center">
        <a href="#" class="acceptButton text-white">Filter</a>
        <button type="button" class="declineButton" data-bs-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>
