<?php

namespace Core\Database;

use PDO;

/**
 * Database connection.
 */
class Connection
{
    public static function make($config)
    {
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['dbname'].';',
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
