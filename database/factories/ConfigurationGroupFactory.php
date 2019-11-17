<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Vbogoev\DynamicConfig\Models\ConfigurationGroup;
use Faker\Generator as Faker;

$factory->define(ConfigurationGroup::class, function (Faker $faker) {
    return [
        'alias' => $faker->word,
        'label' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'is_developer_only' => $faker->boolean(25)
    ];
});
