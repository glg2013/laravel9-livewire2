<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'fengniancong',
             'email' => 'fengniancong@163.com',
             'password' => bcrypt('123456'),
         ]);

         $this->call(NotesTableSeeder::class);
    }
}
