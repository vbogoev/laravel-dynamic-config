<?php

namespace Vbogoev\DynamicConfig\Models;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $guarded = [];

    public function setNewPosition(): void
    {
        $this->position = (self::where('group_id', $this->group_id)->orderBy('position', 'desc')->first()->position ?? 0) + 1;
    }
}
