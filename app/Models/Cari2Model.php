<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Cari2Model extends Model
{
    protected $table = 'mahasiswa';
    protected $useTimestamps = true ;
    protected $allowedFields = ['nim','nama','jurusan'];
}