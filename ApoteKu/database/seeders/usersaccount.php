<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class usersaccount extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345'),
            'role_id' => 1,
            'foto' => 'https://static.vecteezy.com/system/resources/thumbnails/019/194/935/small_2x/global-admin-icon-color-outline-vector.jpg',
        ]);

        // Menambahkan pengguna kasir
        User::create([
            'name' => 'Kasir',
            'email' => 'kasir@gmail.com',
            'password' => Hash::make('12345'),
            'role_id' => 2,
            'foto' => 'https://png.pngtree.com/png-vector/20220607/ourmid/pngtree-woman-cashier-icon-outline-vector-png-image_4855814.png',
        ]);

        // Menambahkan pengguna manager
        User::create([
            'name' => 'Supplier',
            'email' => 'supplier@gmail.com',
            'password' => Hash::make('12345'),
            'role_id' => 3,
            'foto' => 'https://t4.ftcdn.net/jpg/02/94/25/71/360_F_294257124_lTMpgGMKp03SjzXnMnWfpogrDw7H46Gf.jpg',
        ]);
    }
}
