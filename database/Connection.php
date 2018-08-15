<?php

/**
 * Database connection.
 */
class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=todos;', 'root', '');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
