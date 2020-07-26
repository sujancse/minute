<?php

namespace Core\Database;

/**
 * Eloquent ORM.
 */
class ORM
{
    public static function getAll($table)
    {
        return app()->get('database')->getAll($table);
    }

    public static function create($table, $parameters)
    {
        return app()->get('database')->insert($table, $parameters);
    }
}
