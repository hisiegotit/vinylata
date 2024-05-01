<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Vendor;
use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory(10)->create();

        Vendor::factory(10)->create();

        Product::factory(10)->create();

        User::factory()->create([
            'first_name' => 'User',
            'last_name' => 'Test',
            'email' => 'test@example.com',
        ]);
    }
}
