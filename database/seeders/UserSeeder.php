<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate([
            'email' => 'alberto@example.com',
        ], [
            'name' => 'Alberto Romero Pino',
            'password' => Hash::make('prueba123'),
        ]);
    }
}
