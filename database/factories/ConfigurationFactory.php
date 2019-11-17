<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Vbogoev\DynamicConfig\Models\Configuration;
use Faker\Generator as Faker;
use Vbogoev\DynamicConfig\Models\ConfigurationGroup;

$factory->define(Configuration::class, function (Faker $faker) {
    return [
        'group_id' => ConfigurationGroup::inRandomOrder()->first()->id,
        'alias' => $faker->word,
        'value' => $faker->word,
        'field_type' =>  $faker->numberBetween(1, 10),
        'label' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'comment' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'position' => $faker->randomNumber(),
        'is_required' => $faker->boolean,
        'is_active' => $faker->boolean,
    ];
});
