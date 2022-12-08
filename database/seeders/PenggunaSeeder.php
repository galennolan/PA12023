<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengguna = new User;
        $pengguna->username = "admin";
        $pengguna->name = "Administrator";
        $pengguna->email = "adminpa1@bsi.ac.id";
        $pengguna->roles = json_encode(["ADMIN"]);
        $pengguna->password = Hash::make( "admin");
        $pengguna->phone = "081851851851";
        $pengguna->address = "Jl Raya Jatiwaringin No. 101";
        $pengguna->status = "ACTIVE";
        $pengguna->save();
        $this->command->info( "User Admin berhasil diinsert");
    }
}
