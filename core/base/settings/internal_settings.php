<?php

# чтобы нельзя было попасть в этот файл
defined('VG_ACCESS') or die('Access denied.');

const TEMPLATE = 'templates/default/';
const ADMIN_TEMPLATES = 'core/admin/view/';

# версия куки, чтобы, например удалить
# у ВСЕХ старые куки
const COOKIE_VERSION = '1.0.0';
const CRYPT_KEY = '';
# срок бездействия админа
const COOKIE_TIME = 60;
# попытки ввода пароля
const BLOCK_TIME = 3;

# по умолчанию 8 товаров отображать
const QTY = 8;
const QTY_LINKS = 3;
# пути для файлов админа
const ADMIN_CSS_JS = [
    'styles' => [],
    'scripts' => [],
];
# пути для файлов юзера
const USER_CSS_JS = [
    'styles' => [],
    'scripts' => [],
];