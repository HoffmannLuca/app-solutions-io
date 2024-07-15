<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $email = env('DB_ADMIN_EMAIL', 'test@example.com');
        $user = User::where('email', $email)->first();
        if(!$user){
            User::create([
                'name' => 'ADMIN',
                'email' => $email,
                'password' => Hash::make('password'),
            ]);
        }
    }
}
