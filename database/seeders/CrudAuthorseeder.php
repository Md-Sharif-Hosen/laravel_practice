<?php

namespace Database\Seeders;
use App\Models\CrudAuthor;
use Illuminate\Database\Seeder;

class CrudAuthorseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CrudAuthor::truncate();

        CrudAuthor::create([
            'name' => 'Arif Azad',
            'occupation'=>'writter',
            'description'=>'Best islamic author',

        ]);
     

        CrudAuthor::create([
            'name' => 'Mizanur Rahman',
            'occupation'=>'Islamic scoller',
            'description'=>'Best islamic scoller',

        ]);
        CrudAuthor::create([
            'name' => 'Jafor BP',
            'occupation'=>'Writter',
            'description'=>'Islamic writter',

        ]);

    }
}
