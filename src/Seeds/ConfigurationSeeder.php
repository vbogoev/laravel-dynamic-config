<?php

namespace Vbogoev\DynamicConfig\Seeds;

use Illuminate\Database\Seeder;
use Vbogoev\DynamicConfig\Models\Configuration;

class ConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Configuration::class, 50)->make()->each(function($configuration){
            $configuration->setNewPosition();
            $configuration->save();
        });
    }
}
