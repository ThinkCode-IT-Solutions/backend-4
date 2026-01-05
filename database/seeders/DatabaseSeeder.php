<?php

namespace Database\Seeders;

use App\Models\Prize;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
    */
    public function run(): void
    {
       Prize::factory(1000)->create();


       Prize::factory()->create([
        'name' => 'Special Prize',
        'score' => '99',
        'currency' => 'USD',
       ]);
    }
}
