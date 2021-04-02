<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1;$i <= 10;$i++) {
        	Item::create([
        		'box_id' => 3,
        		'detail' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
        		'image' => "img/boxes/games-box.png",
        		'source' => 'Google Play',
        		'source_link' => 'https://play.google.com/store/apps/details?id=com.pubg.newstate',
        		'sumary' => "Beyond Battle Royale ※ creators of PLAYERUNKNOWN'S BATTLEGROUNDS.",
        		'title' => 'PUBG: NEW STATE'
        	]);
        }
    }
}
