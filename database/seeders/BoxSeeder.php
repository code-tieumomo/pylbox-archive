<?php

namespace Database\Seeders;

use App\Models\Box;
use Illuminate\Database\Seeder;

class BoxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Box::create([
            'name'        =>'Codes',
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
        ]);
        Box::create([
            'name'        =>'Foods',
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
        ]);
        Box::create([
            'name'        =>'Games',
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
        ]);
        Box::create([
            'name'        =>'Musics',
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
        ]);
        Box::create([
            'name'        =>'XXXs',
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
        ]);
    }
}
