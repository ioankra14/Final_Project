<?php namespace App\Controllers;
 
use App\Models\Cari4Model;
 
class Pencarian4 extends BaseController
{
    public function index()
    {
        return view('dashboard/pengembalian');
    }
 
    public function cari()
    {
        $peminjaman = new Cari4Model();
        $cari = $this->request->getGet('cari');
        $data = $peminjaman->where('nama', $cari)->findAll();
        return view('dashboard/hasil_pencarian4', compact('data'));
    }
}