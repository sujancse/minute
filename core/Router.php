<?php

/**
 * Route handler.
 */
class Router
{
    protected $routes = [];

    /**
     * Assign array of routes to $routes.
     *
     * @param  array
     */
    public function define($routes)
    {
        $this->routes = $routes;
    }

    /**
     * Load the routes file.
     *
     * @param  $file
     *
     * @return $router
     */
    public static function load($file)
    {
        $router = new static();

        require $file;

        return $router;
    }

    /**
     * Direct the traffic to specified uri.
     *
     * @param  uri
     *
     * @return file
     */
    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception('No routes found with the uri '.$uri, 404);
    }
}
