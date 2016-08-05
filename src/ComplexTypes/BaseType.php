<?php namespace DivideBV\Postnl\ComplexTypes;

use ReflectionClass;

abstract class BaseType
{

    /**
     * Create a class instance statically without calling the constructor.
     *
     * @return $this
     */
    public static function create()
    {
        $reflection = new ReflectionClass(get_called_class());
        return $reflection->newInstanceWithoutConstructor();
    }
}
