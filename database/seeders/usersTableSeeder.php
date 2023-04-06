<?php

namespace Database\Seeders;
use Database\Factories\profileFactory;
use App\Models\users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        users::factory()->count(10)->create();
    }
}
