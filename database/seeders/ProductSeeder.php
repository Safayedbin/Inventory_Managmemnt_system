<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<10;$i++){
            product::insert([
                'product_name' => fake()->name(),
                'product_des' => fake()->text(),
                'price' => mt_rand(1,500),
                'quantity' => mt_rand(1,20),
                //'Category_id ' => mt_rand(1,5),

            ]);
        }
    }
}
