<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Shoe::create([
            'Name' => 'Reebok Running',
            'Size' => 43,
            'Color' => 'Blue',
            'Image' => 'test',
            'CategoryId' => 1
        ]);
    }
}
