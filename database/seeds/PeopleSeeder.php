<?php

use Illuminate\Database\Seeder;
use App\People;
class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        People::create(
            [
                'name' => 'Razia420',
                'city' => 'Islamabad',
                'institution' => 'Punjab',
                'room_id'=>1,

            ]
        );

        People::create(
            [
                'name' => 'Shabnam',
                'city' => 'Karachi',
                'institution' => 'Superior',
                'room_id'=>2,

            ]
        );

        People::create(
            [
                'name' => 'Shabir',
                'city' => 'Lahore',
                'institution' => 'Punjab',
                'room_id'=>3,

            ]
        );
    }
}
