<?php

namespace Tests;

use Illuminate\Support\Facades\Artisan;
use Orchestra\Testbench\TestCase;
use Marabesi\ServiceProvider;

class LarationTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    public function testShouldListAllVariables()
    {
        Artisan::call('laration:list');

        $output = Artisan::output();

        $this->assertContains('hashing', $output);
        $this->assertContains('auth', $output);
        $this->assertContains('app', $output);
        $this->assertContains('mail', $output);
        $this->assertContains('services', $output);
        $this->assertContains('database', $output);
        $this->assertContains('cache', $output);
        $this->assertContains('session', $output);
        $this->assertContains('queue', $output);
        $this->assertContains('view', $output);
        $this->assertContains('logging', $output);
        $this->assertContains('filesystems', $output);
    }

    /**
     * @dataProvider variablesProvider
     */
    public function testShouldListSingleVariableBasedOnTheKeys($contains, $notContains)
    {
        Artisan::call('laration:list', [
            'option' => $contains,
        ]);

        $output = Artisan::output();

        $this->assertContains($contains, $output);

        foreach ($notContains as $value) {
           $this->assertNotRegExp('/\b' . $value . '\b/' , $output);
        }
    }

    public function variablesProvider()
    {
        return include 'providers/optionsProvider.php';
    }
}

