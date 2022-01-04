<?php
namespace App\Controllers;
use App\Models\RiwayatModel;
class Pengembalian extends BaseController
{
protected $pengembalian;
function __construct()
{
$this->pengembalian = new RiwayatModel();
}
public function index()

{
$data['pageTitle'] = 'Daftar Pengembalian';
$data['pengembalian'] = $this->pengembalian->findAll();
return view('dashboard/pengembalian', $data);
}
function edit($nim)
{
$dataPengembalian = $this->pengembalian->find($nim);
if (empty($dataPengembalian)) {
throw new
\CodeIgniter\Exceptions\PageNotFoundException('Data Pengembalian
Tidak ditemukan !');
}
$data['pageTitle'] = 'Edit Data Pengembalian';
$data['pengembalian'] = $dataPengembalian;
return view('dashboard/pengembalian_edit', $data);
}
public function update($nim)
{
if (!$this->validate([
'status_pengembalian' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi'
]
]
])) {
session()->setFlashdata('error', $this->validator->listErrors());
return redirect()->back();
}
$this->pengembalian->update($nim, [
    'status_pengembalian' => $this->request->getVar('status_pengembalian'),
]);
session()->setFlashdata('message', 'Update Data Pengembalian Berhasil');
return redirect()->to('/pengembalian');
}
function delete($nim)
{
$dataPengembalian = $this->pengembalian->find($nim);
if (empty($dataPengembalian)) { throw new\CodeIgniter\Exceptions\PageNotFoundException('Data Pengembalian Tidak ditemukan !');
}
$this->pengembalian->delete($nim);
session()->setFlashdata('message', 'Delete Data Pengembalian Berhasil');
return redirect()->to('/pengembalian');
}
}