<?php

namespace App\Models;

use CodeIgniter\Model;

class RekapKeuanganMasukModel extends Model
{
    protected $table1 = 'um_umum';
    protected $table2 = 'um_taawun';
   protected $tableSantri = 'santri'; // Tabel santri

    // Fungsi untuk menghitung total tahunan
    public function getTotalAnnual($year)
    {
        $db = \Config\Database::connect();

        // Menghitung total dari tabel um_umum
        $query1 = $db->table($this->table1)
            ->selectSum('nominal')
            ->where('YEAR(created_at)', $year)
            ->get();
        $result1 = $query1->getRow()->nominal;

        // Menghitung total dari tabel um_taawun
        $query2 = $db->table($this->table2)
            ->selectSum('nominal')
            ->where('YEAR(created_at)', $year)
            ->get();
        $result2 = $query2->getRow()->nominal;

        // Menghitung total keseluruhan
        return $result1 + $result2;
    }

    // Fungsi untuk menghitung total keseluruhan
    public function getTotalOverall()
    {
        $db = \Config\Database::connect();

        // Menghitung total dari tabel um_umum
        $query1 = $db->table($this->table1)
            ->selectSum('nominal')
            ->get();
        $result1 = $query1->getRow()->nominal;

        // Menghitung total dari tabel um_taawun
        $query2 = $db->table($this->table2)
            ->selectSum('nominal')
            ->get();
        $result2 = $query2->getRow()->nominal;

        // Menghitung total keseluruhan
        return $result1 + $result2;
    }
    
  public function getDataUangMasuk()
    {
        $db = \Config\Database::connect();
        
        // Mendapatkan data dari tabel um_umum
        $query1 = $db->table($this->table1)
            ->select('nama, nominal, penerima, jenis, k_jenis, created_at as date')
            ->get();
        $results1 = $query1->getResultArray();
        
        // Mendapatkan data dari tabel um_taawun dan join dengan tabel santri
        $query2 = $db->table($this->table2)
            ->select('um_taawun.pembayaran, um_taawun.nominal, um_taawun.created_at as date')
            ->join($this->tableSantri . ' s', 's.id = um_taawun.id_santri')
            ->select('s.nama as nama') // Mengambil nama dari tabel santri
            ->get();
        $results2 = $query2->getResultArray();
        
        // Menyusun hasil gabungan
        $combinedResults = array_merge($results1, $results2);
        
        // Mengurutkan hasil gabungan berdasarkan tanggal
        usort($combinedResults, function($a, $b) {
            return strtotime($a['date']) - strtotime($b['date']);
        });
        
        return $combinedResults;
    }

    // Fungsi untuk menghitung total bulanan
    public function getMonthlyTotals($year)
    {
        $db = \Config\Database::connect();
        $monthlyTotals = [];

        // Menghitung total bulanan dari tabel um_umum
        $query1 = $db->table($this->table1)
            ->select('MONTH(created_at) as bulan, SUM(nominal) as total')
            ->where('YEAR(created_at)', $year)
            ->groupBy('MONTH(created_at)')
            ->get();

        foreach ($query1->getResult() as $row) {
            if (!isset($monthlyTotals[$row->bulan])) {
                $monthlyTotals[$row->bulan] = 0;
            }
            $monthlyTotals[$row->bulan] += $row->total;
        }

        // Menghitung total bulanan dari tabel um_taawun
        $query2 = $db->table($this->table2)
            ->select('MONTH(created_at) as bulan, SUM(nominal) as total')
            ->where('YEAR(created_at)', $year)
            ->groupBy('MONTH(created_at)')
            ->get();

        foreach ($query2->getResult() as $row) {
            if (!isset($monthlyTotals[$row->bulan])) {
                $monthlyTotals[$row->bulan] = 0;
            }
            $monthlyTotals[$row->bulan] += $row->total;
        }

        // Mengubah array bulan menjadi nama bulan
        $months = [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember'
        ];

        $monthlyTotalsFormatted = [];
        foreach ($monthlyTotals as $month => $total) {
            $monthlyTotalsFormatted[] = [
                'bulan' => $months[$month] . ' ' . $year,
                'nominal' => $total
            ];
        }

        return $monthlyTotalsFormatted;
    }
}
