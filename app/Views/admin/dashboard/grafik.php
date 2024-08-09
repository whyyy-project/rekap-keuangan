<div class="container-fluid">
  <div class="bg-light text-center rounded px-12 mx-1 mt-1 pt-3">
    <div class="d-flex align-items-center justify-content-between mb-4 px-4 mt-2">
      <h5 class="mb-0">Grafik Keuangan</h5>
    </div>
    <?php
    $rekapKeluarKeseluruhan = 0;
    $rekapTotal = $rekapMasukKeseluruhan - $rekapKeluarKeseluruhan ?>
    <h5 class="fw-bold">Rp. <?= number_format($rekapTotal, 0, ',', '.') ?></h5>
    <canvas id="salse-revenue" width="858" height="429" style="display: block; box-sizing: border-box; height: 429px; width: 858px;"></canvas>

  </div>
</div>



<script>
    window.chartLabels = <?= $labelBulanan ?>;

    // window.chartLabels = [
    //       'Jan 2024',
    //       'Feb 2024',
    //       'Mar 2024',
    //       'Apr 2024',
    //       'Mei 2024',
    //       'Jun 2024',
    //       'Jul 2024',
    //       'Ags 2024',
    //       'Sep 2024',
    //     ];
    window.chartDataMasuk = <?= $dataMasukBulanan ?>;
</script>