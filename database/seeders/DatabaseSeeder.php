<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(DefaultUserSeeder::class);
        // $this->call(PermissionsSeeder::class);
        $this->call(TicketTypeSeeder::class);
        $this->call(TicketPrioritySeeder::class);
        $this->call(TicketStatusSeeder::class);
        $this->call(ActivitySeeder::class);
    }
}
