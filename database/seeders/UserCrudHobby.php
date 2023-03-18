<?php

namespace Database\Seeders;

use App\Models\CrudHobby;
use Illuminate\Database\Seeder;

class UserCrudHobby extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CrudHobby::truncate();

        CrudHobby::create([
            'title' => 'Travelling',

        ]);

        CrudHobby::create([
            'title' => 'Riding',

        ]);

        CrudHobby::create([
            'title' => 'Sports',

        ]);
    }
}
