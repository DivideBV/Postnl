<?php namespace DivideBV\Postnl\ComplexTypes;

use IteratorAggregate;
use ArrayIterator;
use ArrayAccess;
use Exception;

abstract class BaseArrayOfType extends BaseType implements IteratorAggregate, ArrayAccess
{

    /**
     * The name of the array property to use when iterating the class.
     *
     * Actual wrapper classes must define this.
     */
    const WRAPPED_PROPERTY = '';

    /**
     * Implements IteratorAggregate::getIterator().
     * @return ArrayIterator
     */
    public function getIterator()
    {
        return new ArrayIterator($this->getWrappedProperty());
    }

    /**
     * Implements ArrayAcces::offsetExists().
     */
    public function offsetExists($offset)
    {
        return isset($this->getWrappedProperty()[$offset]);
    }

    /**
     * Implements ArrayAcces::offsetGet().
     */
    public function offsetGet($offset)
    {
        return $this->offsetExists($offset) ? $this->getWrappedProperty()[$offset] : null;
    }

    /**
     * Implements ArrayAcces::offsetSet().
     */
    public function offsetSet($offset, $value)
    {
        throw new Exception('Writing to ArrayOf types using ArrayAccess not supported.');
    }

    /**
     * Implements ArrayAcces::unsetOffset().
     */
    public function offsetUnset($offset)
    {
        throw new Exception('Writing to ArrayOf types using ArrayAccess not supported.');
    }

    /**
     * Get wrapped property and make sure it is an array.
     */
    private function getWrappedProperty()
    {
        // When created by the SOAP stack, the property may not be an array.
        $property = $this->{static::WRAPPED_PROPERTY};
        return is_array($property) ? $property : [$property];
    }
}
