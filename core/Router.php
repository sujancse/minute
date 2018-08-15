<?php

/**
 * Route handler.
 */
class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => [],
    ];

    /**
     * Fetch the uri and controller for GET request.
     *
     * @param  string
     * @param  file
     */
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    /**
     * Fetch the uri and controller for POST request.
     *
     * @param  string
     * @param  file
     */
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
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
    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        }

        throw new Exception('No routes found with the uri '.$uri, 404);
    }
}
