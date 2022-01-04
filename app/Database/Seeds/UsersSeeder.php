<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
class UsersSeeder extends Seeder
{
public function run()
{
//
$data = [
[
'username' => 'Anton',
'password' => password_hash('Anton12345', PASSWORD_BCRYPT),
'name' => 'Anton Kurnia',
'created_at' => Time::now()
]
];
$this->db->table('users')->insertBatch($data);
}
}
