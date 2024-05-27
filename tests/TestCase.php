<?php

namespace JoshBonnick\LaravelStubs\Stubs\Tests;

use JoshBonnick\LaravelStubs\Stubs\StubsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            StubsServiceProvider::class,
        ];
    }
}
