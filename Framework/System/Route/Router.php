<?php

namespace Framework\System\Route
{
    Class Router
    {
        use RouterTrait;
        /**
         * Устанавливает маршрут в лист по цепочке префиксов
         * @methods - array
         * @route - string
         * @handler - @HandlerrClass@HandlerrClassMethod
         */
        public function route( $routeName, array $methods = [], $route, $handler )
        {
            $this->generateRoute($routeName, $methods, $route, $handler);
            return $this;
        }
        /**
         * Устанавливает маршрут GET
         * @param $routeName
         * @param $route
         * @param $handler
         */
        public function get($routeName, $route, $handler)
        {

        }
        /**
         * Устанавливает маршрут POST
         * @param $routeName
         * @param $route
         * @param $handler
         */
        public function post($routeName, $route, $handler)
        {

        }
        /**
         * Устанавливает маршрут DELETE
         * @param $routeName
         * @param $route
         * @param $handler
         */
        public function delete($routeName, $route, $handler)
        {

        }
        /**
         * Устанавливает маршрут PUT
         * @param $routeName
         * @param $route
         * @param $handler
         */
        public function put($routeName, $route, $handler)
        {

        }
        /**
         * Устанавливает префикс маршрута
         * @prefix - string
         * @func - Closure function
         */
        public function prefix( $prefix, $func )
        {
           array_push($this->prefixes,$prefix);
           if($func instanceof \Closure)
           {
               $func($this);
               return $this->end_prefix();
           }
        }




        /**
         * Устанавливает промежуточный обработчик для маршрута
         *
         * Так как функция вызвается на текущем объекте в дереве,
         * то берется последний инициализированный маршрут и ему устанавливается
         * список обработчиков переданных в параметрах
         *
         * @param array $middleweare
         *
         * @return $this
         */
        public function middleware(array $middleweare)
        {
            $this->registerMiddleware($middleweare);
            return $this;
        }
    }
}

