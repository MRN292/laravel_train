<?php

namespace Database\Seeders;

use App\Models\roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class rolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        roles::insert([
            ['type'=>'normal'],
            ['type'=>'boosted'],
            ['type'=>'premium']
        ]);

    }
}
