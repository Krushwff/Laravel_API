<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Card;

class CardSeeder extends Seeder
{
    public function run()
    {
        Card::create(['name' => 'Task 1', 'desk_list_id' => 1]);
        Card::create(['name' => 'Task 2', 'desk_list_id' => 1]);
        Card::create(['name' => 'Task 3', 'desk_list_id' => 2]);
        Card::create(['name' => 'Task 4', 'desk_list_id' => 3]);

        Card::create(['name' => 'Task 5', 'desk_list_id' => 4]);
        Card::create(['name' => 'Task 6', 'desk_list_id' => 4]);
        Card::create(['name' => 'Task 7', 'desk_list_id' => 5]);
        Card::create(['name' => 'Task 8', 'desk_list_id' => 6]);

        Card::create(['name' => 'Task 9', 'desk_list_id' => 7]);
        Card::create(['name' => 'Task 10', 'desk_list_id' => 7]);
        Card::create(['name' => 'Task 11', 'desk_list_id' => 8]);
        Card::create(['name' => 'Task 12', 'desk_list_id' => 9]);
    }
}
