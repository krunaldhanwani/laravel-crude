<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\Crud::factory(10)->create();

        // $this->call([UserSeeder::class]);\
        $this->call([PractiseSeeder::class]);

        // \App\Models\Crud::factory()->create([
        //     // 'name' => 'Test User',
        //     'email' => 'Riya@example.com',
        //     'password' => '12212',
        // ]);
    }
}
