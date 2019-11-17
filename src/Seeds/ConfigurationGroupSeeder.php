<?php

namespace Vbogoev\DynamicConfig\Seeds;

use Illuminate\Database\Seeder;
use Vbogoev\DynamicConfig\Models\Configuration;
use Vbogoev\DynamicConfig\Models\ConfigurationGroup;

class ConfigurationGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ConfigurationGroup::class, 10)->make()->each(function($group){
            $group->setNewPosition();
            $group->save();
        });
    }
}
