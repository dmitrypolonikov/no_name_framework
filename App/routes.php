<?php

/**
 *  Определение маршрутов приложения
 */

$router->route("index8", ["GET"], "/", "IndexHandler@index8");

$router->prefix("/api", function ($router){
    $router->route("index5", ["GET"], "/", "IndexHandler@index5");

    $router->prefix("/v1", function ($router){
        $router->route("index6", ["GET"], "/", "IndexHandler@index6");

        $router->prefix("/users", function ($router){

            $router->route("index", ["GET"], "/", "IndexHandler@index");
//            $router->route("index2", ["GET"], "/", "IndexHandler@index2")->middleware(["asd"]);



        });
        $router->route("index3", ["GET"], "/", "IndexHandler@index3");


    });
    $router->route("index4", ["GET"], "/", "IndexHandler@index4");

});

$router->route("index7", ["GET"], "/asd", "IndexHandler@index7");




