<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['nama' => 'Kursi Cafe'],
            ['nama' => 'Meja Tamu'],
            ['nama' => 'Set Meja Makan'],
            ['nama' => 'Pintu Kayu'],
            ['nama' => 'Sofa'],
            ['nama' => 'Kitchen Set'],
            ['nama' => 'Gebyok Kayu Jati'],
            ['nama' => 'Rumah Kayu'],
            ['nama' => 'Gazebo'],
        ];

        DB::table('categories')->insert($categories);
    }
}
