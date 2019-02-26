<?php

use Faker\Generator as Faker;
use App\Room;
$factory->define(App\People::class, function (Faker $faker) {
    $r1 = Room::find(1)->id;
    $r2 = Room::find(2)->id;
    $r3 = Room::find(3)->id;
    $r4 = Room::find(4)->id;
    $r5 = Room::find(5)->id;
    return [
        'name'=>$faker->name,
         'city'=>$faker->city,
         'institution'=>$faker->randomElement(['Supriour','Leads','UCP','Numl']),
          'room_id'=>$faker->randomElement([$r1,$r2,$r3,$r4,$r5]),
        ];
});
   