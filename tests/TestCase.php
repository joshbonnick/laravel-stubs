<?php

namespace LaravelStubs\Stubs\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use LaravelStubs\Stubs\StubsServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            StubsServiceProvider::class,
        ];
    }
}
