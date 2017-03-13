<?php
/**
 *
 *
 * Начальная загрузка приложения
 * Этот файл будет запущен первым при загрузке приложения по маршруту
 *
 *
 */

use Framework\System\App\App;

/**
 * Экспортим конфиги
 */
$config = require PATH . DIRECTORY_SEPARATOR . "App" . DIRECTORY_SEPARATOR . "config.php";

/**
 * Создаем экземпляр приложения и запускаем
 */
$app = new App($router, $config);
$app->run();





