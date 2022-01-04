<?php
namespace App\Controllers;
use App\Models\BukuModel;
class Buku extends BaseController
{
protected $buku;
function __construct()
{
$this->buku = new BukuModel();
}
public function index()

{
$data['pageTitle'] = 'Daftar Buku';
$data['buku'] = $this->buku->findAll();
return view('dashboard/buku', $data);
}
public function create()
{
$data['pageTitle'] = 'Input Data Buku';

return view('dashboard/buku_create', $data);
}
public function store()
{
if (!$this->validate([
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
'penerbit' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi'
]
],
'kategori' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi'
]
],
'halaman' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi'
]
],
'tahun_terbit' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi',
]
],
'foto_buku' => [
    'rules' => 
    'uploaded[foto_buku]|mime_in[foto_buku,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto_buku,1024]',
    'errors' => [
    'uploaded' => 'Harus Ada File yang diupload',
    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
    'max_size' => 'Ukuran File Maksimal 1 MB'
    ]
    ]
])) {
session()->setFlashdata('error', $this->validator->listErrors());
return redirect()->back()->withInput();
}
$filefoto = $this->request->getFile('foto_buku');
$namaFilefoto = $filefoto->getRandomName();
$filefoto->move('buku', $namaFilefoto);
$this->buku->insert([
'isbn' => $this->request->getVar('isbn'),
'judul_buku' => $this->request->getVar('judul_buku'),
'penerbit' => $this->request->getVar('penerbit'),
'kategori' => $this->request->getVar('kategori'),
'halaman' => $this->request->getVar('halaman'),
'tahun_terbit' => $this->request->getVar('tahun_terbit'),
'foto_buku' => $namaFilefoto
]);
session()->setFlashdata('message', 'Tambah Data Buku
Berhasil');
return redirect()->to('/buku');
}
function edit($isbn)
{
$dataBuku = $this->buku->find($isbn);
if (empty($dataBuku)) {
throw new
\CodeIgniter\Exceptions\PageNotFoundException('Data Buku Tidak ditemukan !');
}
$data['pageTitle'] = 'Edit Data Buku';
$data['buku'] = $dataBuku;
return view('dashboard/buku_edit', $data);
}
public function update($isbn)
{
if (!$this->validate([
'judul_buku' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi'
]
],
'penerbit' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi'
]
],
'kategori' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi'
]
],
'halaman' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi'
]
],
'tahun_terbit' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi'
]
],
'foto_buku' => [
    'rules' =>
    'mime_in[foto_buku,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto_buku,1024]',
    'errors' => [
    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
    'max_size' => 'Ukuran File Maksimal 1 MB'
    ]
    ],
])) {
session()->setFlashdata('error', $this->validator->listErrors());
return redirect()->back();
}
$filefotolama = $this->request->getVar('fotobukulama');
$filefoto = $this->request->getFile('foto_buku');
if ($filefoto->getError() == 4) {
$namaFilefoto = $this->request->getVar('fotobukulama');
} else {
$path = '../public/buku/';
@unlink($path . $filefotolama);
$namaFilefoto = $filefoto->getRandomName();
$filefoto->move('buku', $namaFilefoto);
}
$this->buku->update($isbn, [
'judul_buku' => $this->request->getVar('judul_buku'),
'penerbit' => $this->request->getVar('penerbit'),
'kategori' => $this->request->getVar('kategori'),
'halaman' => $this->request->getVar('halaman'),
'tahun_terbit' => $this->request->getVar('tahun_terbit'),
'foto_buku' => $namaFilefoto
]);
session()->setFlashdata('message', 'Update Data Buku Berhasil');
return redirect()->to('/buku');
}
function delete($isbn)
{
$dataBuku = $this->buku->find($isbn);
if (empty($dataBuku)) { throw new\CodeIgniter\Exceptions\PageNotFoundException('Data Buku Tidak ditemukan !');
}
$this->buku->delete($isbn);
//hapus file image dari folder public
$filefoto = $dataBuku->foto_buku;
$path = '../public/buku/';
@unlink($path . $filefoto);
session()->setFlashdata('message', 'Delete Data Buku Berhasil');
return redirect()->to('/buku');
}
public function view($isbn)
{
$dataBuku = $this->buku->find($isbn);
if (empty($dataBuku)) {
throw new
\CodeIgniter\Exceptions\PageNotFoundException('Data Buku Tidak ditemukan !');
}
$data['pageTitle'] = 'Data Buku';
$data['buku'] = $dataBuku;
return view('dashboard/buku_view', $data);
}
}