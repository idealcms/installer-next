<?php
ini_set('display_errors', 'On');

// Подключение автолоадера Composer
require_once __DIR__ . '/../vendor/autoload.php';

// Инициализируем фронт контроллер
$page = new \Ideal\Core\FrontController(__DIR__);

// Запуск приложения
$page->run();
