<?php

/**
 * Request data from user.
 */
class Request
{
    /**
     * Get the route uri.
     *
     * @return string
     */
    public static function uri()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}
