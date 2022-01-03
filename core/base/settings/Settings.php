<?php

namespace core\base\settings;

class Settings
{
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

}