<?php

use Illuminate\Database\Seeder;
use App\People;
use App\Room;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PeopleSeeder::class);
         $this->call(RoomSeeder::class);
    }
}
