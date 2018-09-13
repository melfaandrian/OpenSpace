<?php

use App\Model\Table;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Model\Occupant::class, function (Faker $faker) {
    return [
        'table_id' => function() {
            return Table::all()->random();
        },
        'user_id' => function() {
            return User::all()->random();
        },
        'status' => $faker->boolean
    ];
});
