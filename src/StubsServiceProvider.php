<?php

namespace LaravelStubs\Stubs;

use Illuminate\Support\ServiceProvider;

class StubsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                StubsPublishCommand::class,
            ]);
        }
    }
}