<?php
namespace App\Models;
use CodeIgniter\Model;
class BukuModel extends Model
{
protected $table = "buku";
protected $primaryKey = "isbn";
protected $returnType = "object";
protected $useTimestamps = true;
protected $allowedFields = ['isbn', 'judul_buku', 'penerbit', 'kategori', 'halaman', 'tahun_terbit', 'foto_buku'];
}