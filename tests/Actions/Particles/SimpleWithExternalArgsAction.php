<?php

namespace Tests\Actions\Particles;

use OreyM\Abstracts\Actions\Action;

class SimpleWithExternalArgsAction extends Action
{
    private int $arg1;
    private int $arg2;

    public function __construct(int $arg1, int $arg2)
    {
        $this->arg1 = $arg1;
        $this->arg2 = $arg2;
    }

    protected function run(): array
    {
        return [
            'arg1' => $this->arg1,
            'arg2' => $this->arg2,
        ];
    }
}
