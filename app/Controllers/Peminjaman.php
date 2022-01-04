<?php
namespace App\Controllers;
use App\Models\RiwayatModel;
class Peminjaman extends BaseController
{
protected $peminjaman;
function __construct()
{
$this->peminjaman = new RiwayatModel();
}
public function index()

{
$data['pageTitle'] = 'Daftar Peminjaman';
$data['peminjaman'] = $this->peminjaman->findAll();
return view('dashboard/peminjaman', $data);
}
public function create()
{
$data['pageTitle'] = 'Input Data peminjaman';

return view('dashboard/peminjaman_create', $data);
}
public function store()
{
if (!$this->validate([
'nim' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi'
]
],
'nama' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi'
]
],
'isbn' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi'
]
],
'judul_buku' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi'
]
],
'lama_peminjaman' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi'
]
]
])) {
session()->setFlashdata('error', $this->validator->listErrors());
return redirect()->back()->withInput();
}
$this->peminjaman->insert([
'nim' => $this->request->getVar('nim'),
'nama' => $this->request->getVar('nama'),
'isbn' => $this->request->getVar('isbn'),
'judul_buku' => $this->request->getVar('judul_buku'),
'lama_peminjaman' => $this->request->getVar('lama_peminjaman')
]);
session()->setFlashdata('message', 'Tambah Data Peminjaman Berhasil');
return redirect()->to('/peminjaman');
}
function delete($nim)
{
$dataPeminjaman = $this->peminjaman->find($nim);
if (empty($dataPeminjaman)) { throw new\CodeIgniter\Exceptions\PageNotFoundException('Data Peminjaman Tidak ditemukan !');
}
$this->peminjaman->delete($nim);
session()->setFlashdata('message', 'Delete Data Peminjaman Berhasil');
return redirect()->to('/peminjaman');
}
}