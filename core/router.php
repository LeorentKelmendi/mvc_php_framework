<?php

class Router
{
    /**
     * @var array
     */
    public $routes = [
        'GET'  => [],
        'POST' => [],
    ];
    /**
     * @var array
     */

    /**
     * @param $uri
     * @param $controller
     */
    public function get($uri, $controller)
    {

        $this->routes['GET'][$uri] = $controller;
    }

    /**
     * @param $uri
     * @param $controller
     * @return mixed
     */
    public function post($uri, $controller)
    {

        $this->routes['POST'][$uri] = $controller;
    }
    /**
     * @param $uri
     */
    public function direct($uri, $requestType)
    {

        if (array_key_exists($uri, $this->routes[$requestType])) {

            return $this->routes[$requestType][$uri];
        }

        throw new Exception('No route defined for this URi');

    }

    /**
     * @param $uri
     */
    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

}
