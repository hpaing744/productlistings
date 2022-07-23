<?php

namespace Database\Seeders;

use App\Models\Shoe;
use App\Models\Shirt;
use App\Models\Product;
use App\Models\Trouser;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Product::factory(10)->create();

        Shoe::factory(10)->create();

        Shirt::factory(10)->create();

        Trouser::factory(10)->create();

    }
}
