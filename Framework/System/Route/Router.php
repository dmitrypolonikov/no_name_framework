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
            $route = $this->generateRoute($routeName, $methods, $route, $handler);

            $this->last_processed_route_index = array_push($this->routes, $route);;
            return $this;
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

