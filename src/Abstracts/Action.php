<?php

namespace OreyM\Abstracts\Actions;

use ReflectionClass;
use ReflectionParameter;

abstract class Action
{
    /**
     * @return mixed
     */
    abstract protected function run(): mixed;

    /**
     * @param string $class
     * @param array $parameters
     * @return mixed
     * @throws \ReflectionException
     */
    public static function call(string $class, array $parameters = []): mixed
    {
        if (!empty($parameters)) {
            $action = new ReflectionClass($class);
            $construct = $action->getMethod('__construct');
            $args = $construct->getParameters();

            $invokeParameters = array_merge_recursive(
                ...array_map(function (ReflectionParameter $arg) use ($parameters) {
                    $value = $parameters[$arg->getName()];
                    return [$arg->getName() => $value];
                },
                $args)
            );

            $instance = $action->newInstance(...$invokeParameters);

            return $instance->run();
        }

        return (new $class)->run();
    }
}
