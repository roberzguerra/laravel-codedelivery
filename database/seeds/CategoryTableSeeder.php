<?php

use Illuminate\Database\Seeder;
use CodeDelivery\Models\Category;
use CodeDelivery\Models\Product;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 10)->create()->each(function ($category) {

            // Cria 5 produtos e adiciona eles a cada categoria criada.
            for ($i=0; $i < 5; $i++) {
                $category->products()->save(factory(Product::class)->make());
            }

        });
    }
}
