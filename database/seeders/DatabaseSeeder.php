<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

    //     User::factory()->create([
    //         'name' => 'Test User',
    //         'email' => 'test@example.com',
    //     ]);
    // }

    $categories = [
        'Guitars',
        'Electric',
        'Acoustic',
        'Pianos',
        'Basses',
        'Drums',
        'Keyboards',
        'Woodwinds',
        'Strings',
        'Percussion',
        'Midi',
        'Other'
    ];

    foreach ($categories as $category) {
        Category::create([
            'name' => $category,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
    }
}
