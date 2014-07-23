<?php
/**
 * Index of the application
 *
 * PHP Version 5.4
 *
 * @category Index
 * @package  Core
 * @author   Antoine Knockaert <antoine.knockaert@epitech.eu>
 * @license  GPL v3
 * @link     http://jenkins.knck.eu
 */

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __DIR__ . DS);
define('CONTROLLERS', ROOT . 'controllers' . DS);
define('MODELS', ROOT . 'models' . DS);
define('HELPERS', ROOT . 'helpers' . DS);
define('TMP', ROOT . 'tmp' . DS);

require_once ROOT . 'vendor' . DS . 'autoload.php';

require_once ROOT . 'config' . DS . 'config.php';
require_once ROOT . 'config' . DS . 'routes.php';
require_once ROOT . 'config' . DS . 'database.php';

if (Configuration::$config['mode'] == "development") {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
}

Bootloader::registerAutoloader();

try {
    Router::getInstance()->run();
    Bootloader::render();
} catch (\Exception $e) {
    if (!($e instanceof \StopException)) {
        Bootloader::setResponse(500, json_encode(array('error' => $e->getMessage())));
    }
    Bootloader::render();
}