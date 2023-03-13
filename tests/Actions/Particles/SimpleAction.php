<?php

namespace Tests\Actions\Particles;

use OreyM\Abstracts\Actions\Action;

class SimpleAction extends Action
{
    protected function run(): bool
    {
        return true;
    }
}
