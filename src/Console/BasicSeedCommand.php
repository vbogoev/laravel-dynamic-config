<?php

namespace Vbogoev\DynamicConfig\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Vbogoev\DynamicConfig\Seeds\ConfigurationGroupSeeder;
use Vbogoev\DynamicConfig\Seeds\ConfigurationSeeder;

class BasicSeedCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dynamic-config:basic-seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed basic dynamic-config structure';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Artisan::call('db:seed', [
            '--class' => ConfigurationGroupSeeder::class
        ]);

        Artisan::call('db:seed', [
            '--class' => ConfigurationSeeder::class
        ]);

        $this->info(Artisan::output());
    }
}
