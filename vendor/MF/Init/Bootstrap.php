<?php

namespace MF\Init;

abstract class Bootstrap {

  private $route;

  abstract protected function initRoutes();

  public function __construct()
  {
    $this->initRoutes();
    $this->run($this->getUrl());
  }

  public function getRoutes()
  {
    return $this->routes;
  }

  public function setRoutes(array $routes)
  {
    $this->routes = $routes;
  }

  protected function run($url)
  {
    foreach($this->getRoutes() as $routes => $route)
    {
      if($route['route'] == $url) {
        $class = "App\\Controllers\\".ucfirst($route['controller']);
        $controller = new $class;

        if(method_exists($controller, $route['action'])) {
          $action = $route['action'];
          $controller->$action();
          $controllerExist = true;
        }
      } 
    }
    if(empty($controllerExist)) {
      echo '<h1>Lançar o 404</h1>';
    }
  }

  protected function getUrl()
  {
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  }
}