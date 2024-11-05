<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{

    public function run()
    {


        Category::create([
            'title'=>'culture',
        ]);
        Category::create([
            'title'=>'scientific',
        ]);
        Category::create([
            'title'=>'Techno',
        ]);
        Category::create([
            'title'=>'historic',
        ]);
        Category::create([
            'title'=>'nature',
        ]);
    }
}
