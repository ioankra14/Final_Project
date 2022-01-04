<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class CariModel extends Model
{
    protected $table = 'buku';
    protected $useTimestamps = true ;
    protected $allowedFields = ['isbn','judul_buku','penerbit'];
}