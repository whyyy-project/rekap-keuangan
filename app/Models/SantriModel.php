<?php

namespace App\Models;

use CodeIgniter\Model;

class SantriModel extends Model
{
    protected $table            = 'santri';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

        public function getSantriWithDetails()
    {
        return $this->select('santri.*, komplek_santri.komplek, jenis_santri.jenis, jenis_santri.biaya as js_biaya, adm_sb.jenis_baru as sb_jenis, adm_sb.biaya as sb_biaya')
                    ->join('komplek_santri', 'komplek_santri.id = santri.id_komplek', 'left')
                    ->join('jenis_santri', 'jenis_santri.id = santri.id_jenis_santri', 'left')
                    ->join('adm_sb', 'adm_sb.id = santri.id_santri_baru', 'left')
                    ->findAll();
    }
}
