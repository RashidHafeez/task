<?php

use Illuminate\Database\Seeder;
use App\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'name'=>'r1',
            'status'=>'Available',
            'capacity'=>20,
            'has_ac'=>1,
        ]);
        Room::create([
            'name'=>'r2',
            'status'=>'Available',
            'capacity'=>30,
            'has_ac'=>0,
        ]);
        Room::create([
            'name'=>'r3',
            'status'=>'Not available',
            'capacity'=>50,
            'has_ac'=>1,
        ]);
        Room::create([
            'name'=>'r4',
            'status'=>'Not available',
            'capacity'=>10,
            'has_ac'=>1,
        ]);
        Room::create([
            'name'=>'r5',
            'status'=>'Available',
            'capacity'=>25,
            'has_ac'=>0,
        ]);
        
    }
}
