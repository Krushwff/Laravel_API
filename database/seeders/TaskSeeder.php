<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run()
    {
        Task::create(['name' => 'Subtask 1', 'card_id' => 1]);
        Task::create(['name' => 'Subtask 2', 'card_id' => 1]);
        Task::create(['name' => 'Subtask 3', 'card_id' => 2]);
        Task::create(['name' => 'Subtask 4', 'card_id' => 3]);

        Task::create(['name' => 'Subtask 5', 'card_id' => 4]);
        Task::create(['name' => 'Subtask 6', 'card_id' => 5]);
        Task::create(['name' => 'Subtask 7', 'card_id' => 6]);
        Task::create(['name' => 'Subtask 8', 'card_id' => 7]);

        Task::create(['name' => 'Subtask 9', 'card_id' => 8]);
        Task::create(['name' => 'Subtask 10', 'card_id' => 9]);
        Task::create(['name' => 'Subtask 11', 'card_id' => 10]);
        Task::create(['name' => 'Subtask 12', 'card_id' => 11]);
    }
}

