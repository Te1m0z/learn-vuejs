<?php

namespace core\base\controllers;


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
        if (self::$_instance instanceof self)
        {
            return self::$_instance;
        }
        # если экземпляра ещё нет, то создать
        return self::$_instance = new self;
    }
}