<?php

namespace Database\Seeders;

// use\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            AuthorSeeder::class,
            BookSeeder::class,
        ]);
    }
}
