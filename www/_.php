<?php
ini_set('display_errors', 'On');

// Подключение автолоадера Composer
require_once __DIR__ . '/../vendor/autoload.php';

// Инициализируем фронт контроллер
$page = new \Ideal\Core\FrontController();

// Запуск приложения
$page->run(__DIR__);
