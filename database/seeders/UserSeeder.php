<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<10;$i++){
            user::create([
                'name' => fake()->name(),
                'password' => '123',
                'role' => 'Store keeper',
                //'Created_at' => mt_rand(2023-12-17,2023-1-1)

            ]);
        }
    }
}
