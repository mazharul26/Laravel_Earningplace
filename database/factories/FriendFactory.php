<?php

use Faker\Generator as Faker;

$factory->define(App\friend::class, function (Faker $faker) {
    return [
          "user_id"=>$faker->numberBetween($min=1, $max=50),
        "friend_id"=>$faker->numberBetween($min=1, $max=50)
    ];
});
