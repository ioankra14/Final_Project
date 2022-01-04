<?php namespace App\Controllers;
 
use App\Models\CariModel;
 
class Pencarian extends BaseController
{
    public function index()
    {
        return view('dashboard/buku');
    }
 
    public function cari()
    {
        $buku = new CariModel();
        $cari = $this->request->getGet('cari');
        $data = $buku->where('judul_buku', $cari)->findAll();
        return view('dashboard/hasil_pencarian', compact('data'));
    }
}