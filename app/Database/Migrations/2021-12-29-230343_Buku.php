<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;
class Buku extends Migration
{
public function up()
{
$this->forge->addField([
'isbn' => [
'type' => 'VARCHAR',
'constraint' => 17,
],
'judul_buku' => [
'type' => 'VARCHAR',
'constraint' => '100',
],
'penerbit' => [
'type' => 'VARCHAR',
'constraint' => '100',
],
'kategori' => [
'type' => 'VARCHAR',
'constraint' => '100',
],
'halaman' => [
'type' => 'VARCHAR',
'constraint' => '4',
],
'tahun_terbit' => [
'type' => 'VARCHAR',
'constraint' => '4',
],
'created_at' => [
'type' => 'DATETIME',
'null' => true,
],
'foto_buku' => [
'type' => 'VARCHAR',
'constraint' => '500',
],
'updated_at' => [
'type' => 'DATETIME',
'null' => true,
]
]);
$this->forge->addPrimaryKey('isbn');
$this->forge->createTable('buku');
}
//--------------------------------------------------------------------
public function down()
{
$this->forge->dropTable('buku');
}

}
