<?php namespace App\Controllers;
 
use App\Models\Cari3Model;
 
class Pencarian3 extends BaseController
{
    public function index()
    {
        return view('dashboard/peminjaman');
    }
 
    public function cari()
    {
        $peminjaman = new Cari3Model();
        $cari = $this->request->getGet('cari');
        $data = $peminjaman->where('nama', $cari)->findAll();
        return view('dashboard/hasil_pencarian3', compact('data'));
    }
}