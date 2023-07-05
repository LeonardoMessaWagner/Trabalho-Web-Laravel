<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new User();
        $admin->nome = "Super Administrador";
        $admin->email = "admin@example.com";
        $admin->password = bcrypt("senha");
        $admin->matricula = "12345678";
        $admin->admin = 1;
        $admin->confirmado = 1;
        $admin->save();
    }
}