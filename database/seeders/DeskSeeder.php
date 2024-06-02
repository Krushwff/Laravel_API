<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Desk;

class DeskSeeder extends Seeder
{
    public function run()
    {
        Desk::create(['name' => 'Work Desk']);
        Desk::create(['name' => 'Personal Desk']);
        Desk::create(['name' => 'Project Desk']);
    }
}

