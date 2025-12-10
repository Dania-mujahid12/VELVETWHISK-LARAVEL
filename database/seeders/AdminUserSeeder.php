<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
   
  public function run()
{
    \App\Models\User::create([
        'name' => 'Admin',
        'email' => 'admin@velvetwhisk.com',
        'password' => \Illuminate\Support\Facades\Hash::make('password123'),
        'role' => 'admin'
    ]);
}
}
