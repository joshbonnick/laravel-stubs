<?php

namespace JoshBonnick\LaravelStubs\Stubs\Canvas;

class Package extends \Orchestra\Canvas\Core\Presets\Package
{
    public function getCustomStubPath(): ?string
    {
        return __DIR__.'/../../stubs';
    }
}
