<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DeskList;

class DeskListSeeder extends Seeder
{
    public function run()
    {
        DeskList::create(['name' => 'To Do', 'desk_id' => 1]);
        DeskList::create(['name' => 'In Progress', 'desk_id' => 1]);
        DeskList::create(['name' => 'Done', 'desk_id' => 1]);

        DeskList::create(['name' => 'To Do', 'desk_id' => 2]);
        DeskList::create(['name' => 'In Progress', 'desk_id' => 2]);
        DeskList::create(['name' => 'Done', 'desk_id' => 2]);

        DeskList::create(['name' => 'To Do', 'desk_id' => 3]);
        DeskList::create(['name' => 'In Progress', 'desk_id' => 3]);
        DeskList::create(['name' => 'Done', 'desk_id' => 3]);
    }
}
