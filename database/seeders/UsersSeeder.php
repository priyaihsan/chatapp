<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //membuat user seeder
        $temporaryPicture = "https://images.unsplash.com/photo-1471018238625-87ca40f13b31?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NjM3MTN8MHwxfHJhbmRvbXx8fHx8fHx8fDE2OTA0MDMxNjJ8&ixlib=rb-4.0.3&q=80&w=1080";

        User::create(
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'avatar' => $temporaryPicture,
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]
        );
        User::create(
            [
                'name' => 'Priya Ihsan',
                'email' => 'priyaihsan@gmail.com',
                'avatar' => $temporaryPicture,
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),

            ]
        );
        User::factory(10)->create();
    }
}
