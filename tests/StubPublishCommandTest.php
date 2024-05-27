<?php

use Illuminate\Support\Facades\File;

use function PHPUnit\Framework\assertFileEquals;

it('can publish stubs', function () {
    $targetStubsPath = $this->app->basePath('stubs');

    File::deleteDirectory($targetStubsPath);

    $this->artisan('laravel-stubs:publish')->assertExitCode(0);

    $stubPath = __DIR__.'/../stubs/migration.stub';

    $publishedStubPath = $targetStubsPath.'/migration.stub';

    assertFileEquals($stubPath, $publishedStubPath);
});
