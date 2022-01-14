<?php

namespace core\base\settings;

use core\base\settings\Settings;


# цель класса ShopSettings "склеить" с главным классом Settings
# этот класс Singleton (создаётся/работаем с одним объектом)

class ShopSettings  
{
    # свойство для хранения будущего объекта ShopSettings
    static private $_instance;

    # свойство для ВСЕХ настроек базового класса Settings
    private $baseSettings;

    private $templateArr = [
        'text' => ['price', 'short'],
        'textarea' => ['goods_content']
    ];

    # метод синглтона проверки
    public static function getInstance()
    {
        # если объект уже создан (в свойстве $_instance)
        # и он явлсяется экземпляром ShopSettings
        if (self::$_instance instanceof self) {
            # то вернуть этот экземпляр
            return self::$_instance;
        }

        # сначала записываем в свойство
        # $_instance будущий объект 
        self::$_instance = new self;

        # если мы создаём объект впервые
        # то запишем к нашему объекту ВСЕ настройки класса Settings
        self::$_instance->baseSettings = Settings::getInstance();
        # теперь в нашем $_instance->baseSettings лежит объект Settings
        # а значит мы можем вызывать у него методы класса Settings
        $baseProperties = self::$_instance->baseSettings->clueProperties(get_class());

        return self::$_instance;
    }

    public static function get($property)
    {
        # пытаемся сначала создать объект
        # а потом вызывает у него свойство
        return self::getInstance()->$property;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }
}
