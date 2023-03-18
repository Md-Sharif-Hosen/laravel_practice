<?php

namespace Database\Seeders;
use App\Models\CrudPublication;
use Illuminate\Database\Seeder;

class CrudPublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CrudPublication::truncate();

        CrudPublication::create([
          'name'=>'Gardian Publication',
          'address'=>'Banglabazer,Dhaka',
          'phonenumber'=>'0171111111'


        ]);
        CrudPublication::create([
            'name'=>'Sharif Publication',
            'address'=>'Mirpur,Dhaka',
            'phonenumber'=>'01727837552'


          ]);
          CrudPublication::create([
            'name'=>'professors Publication',
            'address'=>'Nilkhet,Dhaka',
            'phonenumber'=>'0172222222'


          ]);

    }
}
