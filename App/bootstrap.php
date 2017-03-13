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
$config = require PATH . DIRECTORY_SEPARATOR . "App" . DIRECTORY_SEPARATOR . "config.php";
$app = new App($router, $config);




