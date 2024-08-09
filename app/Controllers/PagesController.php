<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RekapKeuanganMasukModel;
use App\Models\SantriModel;
use CodeIgniter\HTTP\ResponseInterface;

class PagesController extends BaseController
{
  public $rekap;
  public $santri;
  function __construct(){
    $this->rekap = new RekapKeuanganMasukModel();
    $this->santri = new SantriModel();
  }
    public function index()
    {
    session()->set('nama', 'Wahyu');
      $tahun = $this->request->getGet('tahun');
      if (!$tahun) {
        $tahun = date('Y');
      }
    $rekapMasukTahunan = $this->rekap->getTotalAnnual($tahun);
    $rekapMasukKeseluruhan = $this->rekap->getTotalOverall();
    $grafikBulananMasuk = $this->rekap->getTotalMonthly();
    $dataUangMasuk = $this->rekap->getDataUangMasuk();
    
    $labels = [];
    $dataMasukBulanan = [];
    
    foreach ($grafikBulananMasuk as $bulan => $nominal) {
        $labels[] = $bulan;  // Key bulan sebagai label
        $dataMasukBulanan[] = $nominal;  // Value sebagai nominal
    }

      $data = [
      'page' => "Dashboard",
      'rekapMasukTahunan' => $rekapMasukTahunan,
      'rekapMasukKeseluruhan' => $rekapMasukKeseluruhan,
      'dataMasukBulanan' => json_encode($dataMasukBulanan),
      'labelBulanan' => json_encode($labels),
      'dataUangMasuk' => $dataUangMasuk
      // 'navigasi' => "<a href='".base_url()."'>Dashboard</a> » Dashboard"
    ];
        return view('admin/dashboard/dashboard', $data);
    } 
    public function santri()
    {
    $dataSantri = $this->santri->getSantriWithDetails();
      $data = [
      'page' => "Santri",
      'navigasi' => "<a href='".base_url()."'>Dashboard</a> » Santri",
      'dataSantri' => $dataSantri,
    ];
        return view('admin/santri/data-santri', $data);
    }
    public function blank()
    {
      $data = [
      'page' => "Blank",
      'navigasi' => "<a href='".base_url()."'>Dashboard</a> » Blank"
    ];
        return view('admin/blank', $data);
    }
    public function login()
    {
      $data = [
      'page' => "Login",
    ];
        return view('signin', $data);
    }
}
