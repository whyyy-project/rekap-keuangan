<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PagesController extends BaseController
{
    public function index()
    {
      $data = [
      'page' => "Dashboard",
      'namaSistem' => $this->namaSistem,
      // 'navigasi' => "<a href='".base_url()."'>Dashboard</a> » Dashboard"
    ];
        return view('admin/dashboard', $data);
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
