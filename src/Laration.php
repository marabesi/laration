<?php

namespace Marabesi;

use Config;
use Illuminate\Console\Command;

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
        $option = strtolower($this->argument('option')) ?: null;

        $configFiles = $option ? Config::getMany([$option]) : array_first(Config::getMany([$option]));

        collect($configFiles)->each(function ($configs, $fileName) {
            $this->table([$fileName, 'value'], $this->flatten(collect($configs)));
        });
    }

    /**
     * Return a collection like [["name","laravel"],["env","local"]].
     *
     * @param $configs
     * @return mixed
     */
    private function flatten($configs)
    {
        $result = collect();

        $configs->each(function ($config, $key) use (&$result) {
            $result = $result->merge($this->flattenToMerge($config, $key)->values());
        });

        return $result;
    }

    /**
     * Check if the configuration is array or not then returns collection like
     * [["provider","Illuminate\Auth..."],["provider","Illuminate\Bus..."]].
     *
     * @param $config
     * @param $key
     * @return \Illuminate\Support\Collection|mixed
     */
    private function flattenToMerge($config, $key)
    {
        if(is_array($config)) {
            return $this->flattenArr(collect($config), $key);
        }

        return collect([[$key,$config]]);
    }

    /**
     * Flattens the configuration keys with array like providers in app.php.
     *
     * @param $configKeyName
     * @param $configs
     * @return mixed
     */
    private function flattenArr($configs, $configKeyName)
    {
        return $configs->filter(function ($config) {
            return !is_array($config);
        })->map(function ($config) use ($configKeyName) {
            return [$configKeyName, $config];
        });
    }
}
