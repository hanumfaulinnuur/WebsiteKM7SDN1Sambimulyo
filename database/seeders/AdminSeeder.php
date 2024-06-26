<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'      => 'Hanum Faulinnuur',
            'email'     =>'operator@gmail.com',
            'password'  => Hash::make('operator123'),
            'jabatan'      => 'Operator',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
    }
}
