<?php

namespace Core;

/**
 * Application dependency injection container.
 */
class App
{
    protected static $registry = [];

    /**
     * Binding values to DI container.
     *
     * @param  sting
     * @param  mixed
     */
    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    /**
     * Get value from DI container by key.
     *
     * @param  string
     *
     * @return mixed
     */
    public function get($key)
    {
        if (!array_key_exists($key, static::$registry)) {
            throw new Exception("No data found with {$key}");
        }

        return static::$registry[$key];
    }
}
