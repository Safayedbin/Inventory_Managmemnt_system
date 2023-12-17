<?php

namespace Database\Seeders;

use App\Models\sale;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<20;$i++){
            sale::insert([
                'User_seller' => mt_rand(1,10),
                //'cart_id' => mt_rand(1,10),
                'sales' => mt_rand(1,1000),

            ]);
        }
    }
}
