<?php

namespace Tests\Actions;

use OreyM\Abstracts\Actions\Action;
use PHPUnit\Framework\TestCase;
use Tests\Actions\Particles\SimpleAction;
use Tests\Actions\Particles\SimpleWithExternalArgsAction;

class ActionTest extends TestCase
{
    final public function testActionWithoutExternalParametrs(): void
    {
        $action = Action::call(SimpleAction::class);

        self::assertTrue($action);
    }

    final public function testActionWithExternalParametrs(): void
    {
        $action = Action::call(SimpleWithExternalArgsAction::class, [
            'arg1' => 29,
            'arg2' => 47,
        ]);

        self::assertEquals(29, $action['arg1']);
        self::assertEquals(47, $action['arg2']);
    }
}
