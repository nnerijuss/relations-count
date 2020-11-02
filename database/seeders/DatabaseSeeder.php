<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::factory(2)->hasComments(2, [
            'confirmed_at' => now(),
            'confirmed_by' => 1
        ])->create();

        \App\Models\Product::factory(1)->hasComments(1)->create();

        \App\Models\Product::factory(1)->hasComments(2, [
            'confirmed_at' => now(),
            'confirmed_by' => 1
        ])->create();
    }
}
