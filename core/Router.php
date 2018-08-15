<?php

/**
 * Route handling.
 */
class Router
{
    protected $routes = [];

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public static function load($file)
    {
        $router = new static();

        require $file;

        return $router;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception('No routes found with the uri '.$uri, 404);
    }
}
