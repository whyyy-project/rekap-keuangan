<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RekapKeuanganMasukModel;
use CodeIgniter\HTTP\ResponseInterface;

class PagesController extends BaseController
{
  public $rekap;
  function __construct(){
    $this->rekap = new RekapKeuanganMasukModel();
  }
    public function index()
    {
      $tahun = $this->request->getGet('tahun');
      if (!$tahun) {
        $tahun = date('Y');
      }
    $rekapMasukTahunan = $this->rekap->getTotalAnnual($tahun);
    $rekapMasukKeseluruhan = $this->rekap->getTotalOverall();
    $grafikBulananMasuk = $this->rekap->getMonthlyTotals($tahun);
    $dataUangMasuk = $this->rekap->getDataUangMasuk();

            // Mengolah data untuk chart
        $labels = [];
        $dataMasukBulanan = [];

        foreach ($grafikBulananMasuk as $data) {
            $labels[] = $data['bulan'];
            $dataMasukBulanan[] = $data['nominal'];
        }
      $data = [
      'page' => "Dashboard",
      'namaSistem' => $this->namaSistem,
      'rekapMasukTahunan' => $rekapMasukTahunan,
      'rekapMasukKeseluruhan' => $rekapMasukKeseluruhan,
      'dataMasukBulanan' => json_encode($dataMasukBulanan),
      'labelBulanan' => json_encode($labels),
      'dataUangMasuk' => $dataUangMasuk
      // 'navigasi' => "<a href='".base_url()."'>Dashboard</a> » Dashboard"
    ];
        return view('admin/dashboard/dashboard', $data);
    } 
    public function blank()
    {
      $data = [
      'namaSistem' => $this->namaSistem,
      'page' => "Blank",
      'navigasi' => "<a href='".base_url()."'>Dashboard</a> » Blank"
    ];
        return view('admin/blank', $data);
    }
    public function login()
    {
      $data = [
      'namaSistem' => $this->namaSistem,
      'page' => "Login",
    ];
        return view('signin', $data);
    }
}
