<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie; // Tambahkan baris ini
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(CategorySeeder::class);
        Movie::factory(50)->create();
    }
}