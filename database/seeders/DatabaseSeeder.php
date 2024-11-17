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

        User::factory()->create([
            'name' => 'anas kasem',
            'email' => 'Kasem.Anas@hotmail.com',
        ]);

        $this->call(JobSeeder::class);
    }

    //make seeder

    /*
        php artisan make:seeder
        name it -- JobSeeder
        in it set  --   Job::factory(10)->create();

        her   set  --   $this->call(JobSeeder::class);

    */
}
