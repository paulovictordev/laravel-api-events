<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoomTypeSeeder::class,
            RoomSeeder::class,
            EventTypeSeeder::class,
            SpaceSeeder::class,
            EventSeeder::class,
            UserSeeder::class,
            BookingSeeder::class,
        ]);
    }
}
