<?php

namespace Vbogoev\DynamicConfig\Models;

use Illuminate\Database\Eloquent\Model;

class ConfigurationGroup extends Model
{
    protected $guarded = [];

    public function setNewPosition(): void
    {
        $this->position = (self::orderBy('position', 'desc')->first()->position ?? 0) + 1;
    }
}
