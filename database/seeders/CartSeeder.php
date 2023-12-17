<?php

namespace Database\Seeders;

use App\Models\cart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<10;$i++){
            cart::insert([
                'product_id' => mt_rand(1,10),
                'quantity' => mt_rand(1,20),
            ]);
        }
    }
}
