<?php

class Connection
{

    /**
     * @param $config
     */
    public static function make($config)
    {
        try {

            return new PDO($config['connection'] . ';dbname=' . $config['name'], $config['username'], $config['password'], $config['options']);

        } catch (PDOException $e) {

        }

    }
}
