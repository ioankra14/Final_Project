<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Cari4Model extends Model
{
    protected $table = 'riwayat';
    protected $useTimestamps = true ;
    protected $allowedFields = ['nim','nama','isbn','judul_buku'];
}