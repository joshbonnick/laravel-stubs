<?php

declare(strict_types=1);

it('declares strict_types in all the stubs', function () {

    $this->assertDirectoryExists($dir = __DIR__.'/../stubs');
    $files = scandir($dir);

    foreach ($files as $file) {
        if ($file === '.' || $file === '..') {
            continue;
        }
        $content = file_get_contents("$dir/$file");

        $this->assertStringContainsString('declare(strict_types=1);', $content, "$file does not use strict types.");
    }
});
