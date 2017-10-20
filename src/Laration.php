<?php

namespace Marabesi;

use Illuminate\Console\Command;
use Config;

class Laration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laration:list {option?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all environment variables used';

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
        $option = strtolower($this->argument('option')) ? :null;
        $configs = $option ? Config::getMany([$option]) : array_first(Config::getMany([$option]));

        collect($configs)->each(function($configs,$fileName) {
            $this->table([$fileName,'value'], $this->getRows(collect($configs)));
        });

    }

    private function getRows($configs)
    {
        return array_merge($this->flatten($configs),$this->flattenArr($configs));
    }

    /**
     * this method flattens the configuration keys with array like providers in app.php
     * @param $configs
     * @return mixed
     */
    private function flattenArr($configs)
    {
        return $configs
            ->filter(function($config){
                return is_array($config);
            })
            ->flatMap(function($config,$key){
                return $this->flatten(collect($config),$key);
            })
            ->values()
            ->toArray();
    }

    /**
     * returns [["name","laravel"],["env","local"]]
     * @param $configs
     * @param null $configKeyName
     * @return mixed
     */
    private function flatten($configs,$configKeyName = null)
    {
        return $configs
            ->filter(function($config){
                return !is_array($config);
            })
            ->map(function($config,$key) use ($configKeyName){
                return [$configKeyName ? : $key,$config];
            })
            ->values()
            ->toArray();
    }
}

