<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'task' => 'study'
        ];
        Todo::create($param);
        $param = [
            'task' => 'gym training'
        ];
        Todo::create($param);
    }
}
