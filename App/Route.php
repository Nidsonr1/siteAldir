<?php

namespace App;
use MF\Init\Bootstrap;

class Route extends Bootstrap {

  public function initRoutes()
  {
    $routes['home'] = array(
      'route' => '/home',
      'controller' => 'indexController',
      'action' => 'index'
    );

    $routes[''] = array(
      'route' => '/',
      'controller' => 'indexController',
      'action' => 'index'
    );

    $this->setRoutes($routes);
  }
}