<?php

namespace core\base\settings;

class Settings
{
    static private $_instance;

    private $routes = [
        'admin' => [
            'name' => 'admin',
            'path' => 'core/admin/controller/',
            'hrURL' => false
        ],
        'settings' => [
            'path' => 'core/base/settings/'
        ],
        'plugins' => [
            'path' => 'core/plugins/',
            'hrURL' => false
        ],
        'user' => [
            'path' => 'core/user/controller/',
            'hrURL' => true,
            'routes' => []
        ],
        'default' => [
            'controller' => 'IndexController',
            'inputMethod' => 'inputData',
            'outputMethod' => 'outputData'
        ]
    ];

    public static function getInstance()
    {
        if (self::$_instance instanceof self) {
            return self::$_instance;
        }

        return self::$_instance = new self;
    }

    public static function get($property)
    {
        return self::getInstance()->$property;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public function clueProperties($class)
    {
        $baseProperties = [];

        foreach ($this as $name => $item) {
            $property = $class::get($name);
            $baseProperties[$name] = $property;

            if (is_array($property) && is_array($item))
            {
                # объеденить многомерные массивы
                $baseProperties[$name] = array_replace_recursive($this->name, $property);
            }
        }

        printed($baseProperties);

        exit();
    }
}
