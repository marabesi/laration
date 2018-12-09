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

    public function testShouldListSingleVariableBasedOnTheKeys()
    {
        Artisan::call('laration:list', [
            'option' => 'auth'
        ]);

        $output = Artisan::output();

        $this->assertContains('auth', $output);

        $this->assertNotContains('hashing', $output);
        $this->assertNotContains('app', $output);
        $this->assertNotContains('mail', $output);
        $this->assertNotContains('services', $output);
        $this->assertNotContains('database', $output);
        $this->assertNotContains('cache', $output);
        $this->assertNotContains('session', $output);
        $this->assertNotContains('queue', $output);
        $this->assertNotContains('view', $output);
        $this->assertNotContains('logging', $output);
        $this->assertNotContains('filesystems', $output);
    }
}
