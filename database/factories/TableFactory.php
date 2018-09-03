<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Table::class, function (Faker $faker) {
    return [
        'id' => $faker->sha1,
        'description' => $faker->address
    ];
});
