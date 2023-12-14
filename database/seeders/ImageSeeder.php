<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i = 1; $i <= 38; $i++) {
            for ($j = 1; $j <= 3; $j++) {
                $data[] = [
                    'product_id' => $i,
                    'gambar' => "product/{$i}_{$j}.png",
                ];
            }
        }

        DB::table('images')->insert($data);
    }
}
