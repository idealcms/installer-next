<?php

return [
    // Начальная папка CMS
    'startUrl' => '',
    // Папка админки
    'adminFolder' => '/admin',
    // Параметры подключения к БД
    'db' => [
        'host' => getenv('DB_HOST') ?: 'localhost',
        'login' => getenv('DB_LOGIN') ?: '',
        'password' => getenv('DB_PASSWORD') ?: '',
        'name' => getenv('DB_NAME') ?: '',
        'charset' => 'UTF-8',
        'prefix' => 'i_'
    ],
    // Очередь middleware для обработки http-запроса (вызывается __invoke у соответствующего класса)
    'middleware' => [
        \Ideal\Core\Admin\Router::class,
        \Ideal\Core\Site\Router::class,
    ],
    'definitions' => [
        //\Ideal\Core\Config::class => create(\Ideal\Core\Config3::class),
    ],
    'structures' => [
        // Подключаем структуру для страниц на сайте
        [
            'id' => 1,
            'structure' => 'Ideal_Part',
            'name' => 'Страницы',
            'isShow' => 1,
            'hasTable' => true,
            'startName' => 'Главная',
            'url' => ''
        ],
    ],
];
