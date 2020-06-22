<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

header('Content-Type: text/html; charset=utf-8');

define('ROOT_DIR'   , __DIR__);
define('PAGE_DIR'   , ROOT_DIR . '/pages');
define('EXT'        , 'php');
define('HEADER_PAGE', 'inc/header.php');
define('FOOTER_PAGE', 'inc/footer.php');
define('HEAD'       , 'inc/head.php');

$topMenu = array(
    'main'   => array('title' => 'Главная'),
    'data'     => array('title' => 'Данные'),
    'database' => array('title' => 'Базы'),
    'users'    => array('title' => 'Пользователи'),
    'settings' => array('title' => 'Настройки'),
    'scheme'   => array('title' => 'Схема'),
    'tables'   => array('title' => 'Таблицы'),
    'query_builder' => array('title' => 'Запросы'),
);

$pageName = 'main';

if (!empty($_GET['page']))
    $pageName = $_GET['page'];

define('PAGE_NAME', $pageName);
define('SITE_URL' , $_SERVER['SCRIPT_NAME']);

$fileName = PAGE_DIR . '/' . PAGE_NAME . '.' . EXT;

if (!file_exists($fileName)) {
    die('Файл ' . $fileName . ' не найден');
}

define('FILE_NAME', $fileName);

