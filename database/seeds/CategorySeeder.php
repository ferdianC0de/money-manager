<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert([
        [
          'name' => 'Tanah',
          'description' => 'tentang tanah',
        ],
        [
          'name' => 'Rumah',
          'description' => 'tentang rumah',
        ],
        [
          'name' => 'Kontrakan',
          'description' => 'tentang kontrakan',
        ],
      ]);
    }
}
