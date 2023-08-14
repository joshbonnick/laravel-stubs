<?php

namespace JoshBonnick\LaravelStubs\Stubs\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use JoshBonnick\LaravelStubs\Stubs\StubsServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            StubsServiceProvider::class,
        ];
    }
}
