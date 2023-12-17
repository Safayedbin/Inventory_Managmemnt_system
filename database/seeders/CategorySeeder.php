<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   $object=collect([
        ['type' => 'clothings'],
        ['type' => 'fashion'],
        ['type' => 'food'],
        ['type' => 'tech'],
        ['type' => 'accessories'],

    ]);

    $object->each(function($object){
        category::insert($object);
    });

    }
}
