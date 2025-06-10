<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory()->create([
            'full_name' => 'admin',
            'email' => 'admin@gmail.com',
            'password'=> Hash::make('admin@1122'),
            'user_role'=>'admin',
        ]);
    }
}