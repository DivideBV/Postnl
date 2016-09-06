<?php namespace DivideBV\Postnl\ComplexTypes;

use IteratorAggregate;
use ArrayIterator;

abstract class BaseArrayOfType extends BaseType implements IteratorAggregate
{

    /**
     * The name of the array property to use when iterating the class.
     *
     * Actual wrapper classes must define this.
     */
    const WRAPPED_PROPERTY = '';

    /**
     * Get the iterator for the current object.
     * @return ArrayIterator
     */
    public function getIterator()
    {
        return new ArrayIterator($this->{static::WRAPPED_PROPERTY});
    }
}
