<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => Category::inRandomOrder()->first()->id,
            'name' => fake()->randomElement([
                'Laptop ASUS VivoBook',
                'Mouse Wireless Logitech',
                'Keyboard Mechanical RGB',
                'Headset Gaming',
                'Webcam Full HD',
                'Monitor LED 24 Inch',
                'Flashdisk 64GB',
                'SSD 512GB',
                'RAM 16GB DDR4',
                'Harddisk External 1TB',
                'Power Bank 20000mAh',
                'Kabel USB Type-C',
                'Charger Fast Charging',
                'Smartwatch Digital',
                'Speaker Bluetooth',
                'Printer Inkjet',
                'Router WiFi',
                'Cooling Pad Laptop',
                'Microphone USB',
                'Tablet Android',
            ]),
            'slug' => fake()->unique()->slug(),
            'description' => fake()->sentence(12),
            'price' => fake()->numberBetween(50000, 15000000),
            'stock' => fake()->numberBetween(0, 100),
            'is_active' => fake()->boolean(90),
        ];
    }
}
