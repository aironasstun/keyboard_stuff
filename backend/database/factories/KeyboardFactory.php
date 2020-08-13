<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Keyboard::class, function (Faker $faker) {
    return [
        'author' => $faker->name,
        'keyboard' => $faker->randomElement(['YC66', 'Tofu', 'K66', 'KBD67', 'Space65', 'Q75', 'GK61', 'GK68']),
        'keycaps' => $faker->randomElement(['Fento', 'Bento', 'GMK Nautilus', 'Stock', 'Generic Doubleshot Puddings']),
        'switches' => $faker->randomElement(['Tactile', 'Linear', 'Clicky']),
        'base' => $faker->randomElement(['Stock', 'Acrylic', 'Alu', 'Plastic']),
        'pcb' => $faker->randomElement(['Stock', 'DZ65', 'DZ65v2'])
    ];
});
