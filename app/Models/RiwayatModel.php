<?php
namespace App\Models;
use CodeIgniter\Model;
class RiwayatModel extends Model
{
protected $table = "riwayat";
protected $primaryKey = "nim";
protected $returnType = "object";
protected $useTimestamps = true;
protected $allowedFields = ['nim', 'nama', 'isbn', 'judul_buku','lama_peminjaman','status_pengembalian'];
}