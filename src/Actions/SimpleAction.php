<?php

namespace OreyM\Actions;

use OreyM\Abstracts\Actions\Action;

class SimpleAction extends Action
{
    private string $arg1;
    private string $arg2;

    public function __construct(string $arg1, string $arg2)
    {
        $this->arg1 = $arg1;
        $this->arg2 = $arg2;
    }

    protected function run(): string
    {
        $concat = sprintf('%s, %s', $this->arg1, $this->arg2);

        return 'Action execution result: ' . $concat;
    }
}
