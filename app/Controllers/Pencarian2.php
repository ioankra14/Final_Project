<?php namespace App\Controllers;
 
use App\Models\Cari2Model;
 
class Pencarian2 extends BaseController
{
    public function index()
    {
        return view('dashboard/mahasiswa');
    }
 
    public function cari()
    {
        $mahasiswa = new Cari2Model();
        $cari = $this->request->getGet('cari');
        $data = $mahasiswa->where('nama', $cari)->findAll();
        return view('dashboard/hasil_pencarian2', compact('data'));
    }
}