<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
            ['id' => 1, 'name' => 'Dog'],
            ['id' => 2, 'name' => 'Cat'],
            ['id' => 3, 'name' => 'Bird'],
            ['id' => 4, 'name' => 'Reptile'],
            ['id' => 5, 'name' => 'Rodent'],
            ['id' => 6, 'name' => 'Fish'],
            ['id' => 7, 'name' => 'Rabbit'],
            ['id' => 8, 'name' => 'Horse'],
            ['id' => 9, 'name' => 'Amphibian'],
            ['id' => 10, 'name' => 'Invertebrate'],
        ];

        foreach ($categories as $category) {
            DB::table('category')->insert([
                'id' => $category['id'],
                'name' => $category['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
