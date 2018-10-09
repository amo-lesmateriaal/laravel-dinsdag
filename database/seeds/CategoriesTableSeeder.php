<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Roomijs',
            'description' => 'Beschrijving van romig ijs',
            'popularity' => 5
        ]);
        DB::table('categories')->insert([
            'name' => 'Waterijs',
            'description' => 'Beschrijving van waterig ijs',
            'popularity' => 4
        ]);
    }
}
