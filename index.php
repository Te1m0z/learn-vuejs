<?php

// use App\n1\A;

# константа безопасности
define('VG_ACCESS', true);

# *заголовки нужно отправлять
# ДО вывода чего-либо на экран
header('Content-Type:text/html;charset=utf-8');

# супер глобальный массив SESSION
# *временные файлы на сервере
# *действует пока не закроется браузер
session_start();

# вспомогающие функции
require_once 'libraries/functions.php';

require_once 'config.php';

# настройки для переноса сайта между хостингами
require_once 'core/base/settings/internal_settings.php';

use core\base\exceptions\RouteException;
use core\base\controllers\RouteController;

try {

    $c = RouteController::getInstance();

    // printed($c);

} catch (RouteException $err) {

    exit($err->getMessage());
}
