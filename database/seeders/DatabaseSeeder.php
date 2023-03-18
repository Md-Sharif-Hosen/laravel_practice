<?php

namespace Database\Seeders;

use App\Models\Contact;
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
        $this->call(UserSeeder::class);
        $this->call(UserRoleSeeder::class);
        $this->call(UserCrudHobby::class);
        $this->call(CrudAuthorseeder::class);
        $this->call(CrudPublicationSeeder::class);

        Contact::factory()->count(100) ->create();
    }
}