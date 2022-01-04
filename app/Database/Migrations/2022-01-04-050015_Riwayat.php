<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;
class Riwayat extends Migration
{
public function up()
{
$this->forge->addField([
'nim' => [
'type' => 'VARCHAR',
'constraint' => 11,
],
'nama' => [
'type' => 'VARCHAR',
'constraint' => '255',
],
'isbn' => [
'type' => 'VARCHAR',
'constraint' => 17,
],
'judul_buku' => [
'type' => 'VARCHAR',
'constraint' => '100',
],
'lama_peminjaman' => [
'type' => 'VARCHAR',
'constraint' => '2',
],
'status_pengembalian' => [
'type' => 'ENUM',
'constraint' => "'Late','On-time'",
],
'created_at' => [
'type' => 'DATETIME',
'null' => true,
],
'updated_at' => [
'type' => 'DATETIME',
'null' => true,
]
]);
$this->forge->addPrimaryKey('nim');
$this->forge->createTable('riwayat');
}
//--------------------------------------------------------------------
public function down()
{
$this->forge->dropTable('riwayat');
}

}