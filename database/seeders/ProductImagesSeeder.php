<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 13; $i++) {
            DB::table('product_images')->insert([
                'img' => 'product' . '_' . $i . '.jpg',
                'product_id' => $i
            ]);
        }
    }
}
