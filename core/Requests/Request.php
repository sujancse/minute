<?php

namespace Core\Requests;

/**
 * Request data from user.
 */
class Request
{
    private $request;

    public function __construct()
    {
        $this->request = $this->getData();
    }

    /**
     * Get the request uri path.
     *
     * @return string
     */
    public static function uri()
    {
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
    }

    /**
     * Get request type from server.
     *
     * @return string
     */
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * Get request data based on method.
     *
     * @return array
     */
    public function getData()
    {
        switch ($this->method()) {
            case 'POST':
                return $_POST;
                break;

            case 'GET':
                return $_GET;
                break;

            default:
                return $_SERVER;
                break;
        }
    }

    /**
     * Get value of an object.
     *
     * @param string $key
     *
     * @return string|key
     */
    public function __get($key)
    {
        if (isset($this->request[$key])) {
            return $this->request[$key];
        }

        return null;
    }

    /**
     * Get all requested data.
     *
     * @return array
     */
    public function all()
    {
        return $this->request;
    }
}
