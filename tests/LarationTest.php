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

        $this->assertStringContainsString('hashing', $output);
        $this->assertStringContainsString('auth', $output);
        $this->assertStringContainsString('app', $output);
        $this->assertStringContainsString('mail', $output);
        $this->assertStringContainsString('services', $output);
        $this->assertStringContainsString('database', $output);
        $this->assertStringContainsString('cache', $output);
        $this->assertStringContainsString('session', $output);
        $this->assertStringContainsString('queue', $output);
        $this->assertStringContainsString('view', $output);
        $this->assertStringContainsString('logging', $output);
        $this->assertStringContainsString('filesystems', $output);
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

        $this->assertStringContainsString($contains, $output);

        foreach ($notContains as $value) {
           $this->assertNotRegExp('/\b' . $value . '\b/' , $output);
        }
    }

    public function variablesProvider()
    {
        return include 'providers/optionsProvider.php';
    }
}

