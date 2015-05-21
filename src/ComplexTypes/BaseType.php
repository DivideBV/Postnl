<?php namespace DivideBV\Postnl\ComplexTypes;

use ReflectionClass;

class BaseType
{

    /**
     * Create a class instance statically without calling the constructor.
     */
    public static function create()
    {
        $reflection = new ReflectionClass(get_called_class());
        return $reflection->newInstanceWithoutConstructor();
    }
}
