<?php

namespace core\base\controllers;

use core\base\settings\Settings;
use core\base\settings\ShopSettings;

# Singleton класс-одиночка
class RouteController
{
    # будущий объект класса
    static private $_instance;

    # проверить сходимость экземпляров классов
    static public function getInstance()
    {
        # если ИЗ ВНЕ пытаются создать
        # объект, а он уже создан
        if (self::$_instance instanceof self) {
            return self::$_instance;
        }
        # если экземпляра ещё нет, то создать
        self::$_instance = new self;
        return self::$_instance;
    }

    private function __construct()
    {
        // $s1 = Settings::get('routes');
        $s2 = ShopSettings::get('baseSettings');

        // printed($s1);
        printed($s2);
        // printed(ShopSettings::getInstance());

        exit();
    }

    private function __clone()
    {
    }
}
