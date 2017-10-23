<?php

class App
{

    /**
     * @var array
     */
    protected static $registry = [];

    /**
     * @param $key
     * @param $value
     */
    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    /**
     * @param $key
     */
    public static function get($key)
    {

        if (!array_key_exists($key, static::$registry)) {

            throw new Exception("No {$key} is bound in the container");
        }

        return static::$registry[$key];

    }
}
