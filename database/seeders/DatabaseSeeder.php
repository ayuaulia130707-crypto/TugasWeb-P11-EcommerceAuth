<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        $categories = [
            ['name' => 'Laptop', 'slug' => 'laptop'],
            ['name' => 'Aksesoris', 'slug' => 'aksesoris'],
            ['name' => 'Komponen PC', 'slug' => 'komponen-pc'],
            ['name' => 'Storage', 'slug' => 'storage'],
            ['name' => 'Perangkat Jaringan', 'slug' => 'perangkat-jaringan'],
        ];

        foreach ($categories as $category) {
    Category::firstOrCreate(
        ['slug' => $category['slug']],
        $category
    );
}


        Product::factory()->count(50)->create();


        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
        ]);


        User::factory()->create([
            'name' => 'User',
            'email' => 'user@example.com',
            'role' => 'user',
        ]);
    }
}
