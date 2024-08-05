<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['id' => 1, 'name' => 'Puppy'],
            ['id' => 2, 'name' => 'Adult'],
            ['id' => 3, 'name' => 'Male'],
            ['id' => 4, 'name' => 'Female'],
            ['id' => 5, 'name' => 'Adopted'],
            ['id' => 6, 'name' => 'Available'],
            ['id' => 7, 'name' => 'Vaccinated'],
            ['id' => 8, 'name' => 'Neutered'],
            ['id' => 9, 'name' => 'Trained'],
            ['id' => 10, 'name' => 'Special Needs'],
        ];

        foreach ($tags as $tag) {
            DB::table('tag')->insert([
                'id' => $tag['id'],
                'name' => $tag['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
