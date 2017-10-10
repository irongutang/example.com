<?php

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    public function run()
    {
        // Retrieve the query string
        $uri = $this->getURI();
        // Check if there such request in routes.php
        foreach ($this->routes as $uriPattern => $path) {
            // Comparing $uriPattern with $uri
            if (preg_match("~$uriPattern~", $uri)) {

                // Retrieving inner path from outer path according to a rule
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                // Which Controller and Action?
                $segments = explode('/', $internalRoute);
                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);
                $actionName = 'action'.ucfirst(array_shift($segments));

                $parameters = $segments;

                // Include Controller class file
                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                // Create an object and call the method(e.g. action)
                $controllerObject = new $controllerName;

                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                if ($result != null) {
                    break;
                }
            }
        }
    }

    /**
     * Returns request string
     * @return string
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return $uri = trim($_SERVER['REQUEST_URI'], '/');
        }
    }
}