<?php

namespace OreyM\UI\Web\Controllers;

use OreyM\Abstracts\Actions\Action;
use OreyM\Actions\SimpleAction;

class MainController
{
    public function __invoke()
    {
        $execution = Action::call(SimpleAction::class, [
            'arg1' => 'First some argument',
            'arg2' => 'Second some argument',
        ]);

        return $execution;
    }
}
