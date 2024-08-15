<?php namespace Bikra;

class Router{
    protected $routes = [];

    private function addRoute($route, $controller, $action, $method)
    {

        $this->routes[$method][$route] = ['controller' => $controller, 'action' => $action];
    }

    public function get($route, $controller, $action)
    {
        $this->addRoute($route, $controller, $action, "GET");
    }

    public function post($route, $controller, $action)
    {
        $this->addRoute($route, $controller, $action, "POST");
    }

    public function dispatch()
    {
        $url = strtok($_SERVER['REQUEST_url'], '?');
        $method =  $_SERVER['REQUEST_METHOD'];

        if (array_key_exists($url, $this->routes[$method])) {
            $controller = $this->routes[$method][$url]['controller'];
            $action = $this->routes[$method][$url]['action'];

            $controller = new $controller();
            $controller->$action();
        } else {
            throw new \Exception("No route found for URL: $url");
        }
    }
}