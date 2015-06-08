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
        // When created by the SOAP stack, the property may not be an array.
        $property = $this->{static::WRAPPED_PROPERTY};
        $iterable = is_array($property) ? $property : [$property];
        return new ArrayIterator($iterable);
    }
}
