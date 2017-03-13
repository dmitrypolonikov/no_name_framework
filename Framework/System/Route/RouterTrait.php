<?php

namespace Framework\System\Route
{

    trait RouterTrait
    {
        /**
         * Массив префиксов путей
         * @prefixes array
         */
        private $prefixes = [];
        /**
         * Массив маршрутов приложения
         * @routes array
         */
        private $routes = [];
        /**
         * Хранит имя последнего обработанно маршрута
         * @last_processed_route_index
         */
        private $last_processed_route_index;
        /**
         * Генерирует маршрут
         * @param $routeName
         * @param array $methods
         * @param $route
         * @param $handler
         *
         * @return array
         */
        protected function generateRoute($routeName, $methods, $route, $handler)
        {
            /**
             * Сборка пути
             */
            $this->routes[$routeName]["route"] = implode($this->prefixes).$route;
            if (is_array($methods))
            {

            }
        }

        /**
         * Регистрирует промежуточные обработчики
         * @param array $middleware
         */
        protected function registerMiddleware(array $middleware)
        {

            $this->routes[$this->last_processed_route_index - 1]["middlewares"] = $middleware;
        }

        /**
         * Удаляет последний префикс маршрута
         *
         * @return Route::class
         */
        protected function end_prefix()
        {
            array_pop( $this->prefixes );
        }

        /**
         * Возвражает массив инициализарованных маршрутов
         *
         * @return array
         */
        public function getRoutes()
        {
            return $this->routes;
        }

    }
}

