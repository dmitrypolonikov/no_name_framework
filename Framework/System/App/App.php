<?php

namespace Framework\System\App
{
    use Framework\System\Route\Router;
    class App
    {
        private $routeMap = array();
        private $config = array();
        public function __construct(Router $router, array $config = [])
        {
            $this->routeMap = $router->getRoutes();
            $this->config = $config;
            \SHOW_VAR\SV($router->getRoutes());
        }
        public function run()
        {

        }
    }
}