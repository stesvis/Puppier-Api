<?php


namespace App\Misc\Enums;


use League\Flysystem\NotSupportedException;
use ReflectionClass;
use ReflectionException;

abstract class BaseEnum
{

    const NONE = null;

    /**
     * Enum constructor.
     */
    final private function __construct()
    {
        throw new NotSupportedException(); //
    }

    /**
     * @param $value
     * @return bool
     * @throws ReflectionException
     */
    final public static function isValid($value)
    {
        return in_array($value, static::toArray());
    }

    /**
     * @return array
     * @throws ReflectionException
     */
    final public static function toArray()
    {
        return (new ReflectionClass(static::class))->getConstants();
    }

    /**
     *
     */
    final private function __clone()
    {
        throw new NotSupportedException();
    }
}
