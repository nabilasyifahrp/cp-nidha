<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            'IoT Solution',
            'Manufacturing Software',
            'Asset Management',
            'Enterprise',
        ];

        foreach ($categories as $category) {
            ProductCategory::create(['category' => $category]);
        }
    }
}
