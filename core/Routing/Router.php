<?php

namespace Core\Routing;

class Router
{
    protected static array $routes = [];

    public static function get(string $uri, array $action)
    {
        self::$routes['GET'][$uri] = $action;
    }
    public static function post(string $uri, array $action)
    {
        self::$routes['POST'][$uri] = $action;
    }
    public static function delete(string $uri, array $action)
    {
        self::$routes['DELETE'][$uri] = $action;
    }

    public static function dispatch()
    {
        $method = strtoupper($_SERVER['REQUEST_METHOD']);
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = rtrim($uri, '/') ?: '/';

        if (!isset(self::$routes[$method][$uri])) {
            $allowedMethods = [];
            foreach (self::$routes as $m => $routes) {
                if (isset($routes[$uri])) {
                    $allowedMethods[] = $m;
                }
            }

            if (!empty($allowedMethods)) {
                http_response_code(405);
                header('Allow: ' . implode(', ', $allowedMethods));
                echo "405 Method $method Not Allowed <br> Allowed methods: ".implode(', ', $allowedMethods);
            } else {

                http_response_code(404);
                echo "404 Not Found";
            }
            return;
        }

        [$controllerClass, $methodName] = self::$routes[$method][$uri];
        $controller = new $controllerClass;
        echo $controller->$methodName();
    }
}
