<?php

namespace Vbogoev\DynamicConfig\Http\Controllers;

use Illuminate\Routing\Controller;

class ConfigurationGroupController extends Controller
{
    public function index()
    {
        echo request()->route()->getName();
    }

    public function create()
    {
        echo request()->route()->getName();
    }

    public function store()
    {
        echo request()->route()->getName();
    }

    public function destroy()
    {
        echo request()->route()->getName();
    }
}

