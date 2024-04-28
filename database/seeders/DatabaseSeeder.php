<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@merahputih.com',
            'password' => bcrypt('admin123'),
            'is_admin' => 1
        ]);
        User::create([
            'name' => 'User 1',
            'email' => 'budi@gmail.com',
            'password' => bcrypt('budi123'),
            'is_admin' => 0
        ]);

        Category::create([
            'category_name' => 'Laptop',
            'icon' => 'img/default.png'
        ]);
        Category::create([
            'category_name' => 'Handphone',
            'icon' => 'img/default.png'
        ]);
    }
}
