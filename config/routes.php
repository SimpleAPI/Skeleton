<?php
/**
 * Routes configuration
 *
 * PHP Version 5.4
 *
 * @category Configuration
 * @package  Routes
 * @author   Antoine Knockaert <antoine.knockaert@epitech.eu>
 * @license  MIT
 * @link     https://github.com/SimpleAPI
 */

use SimpleAPI\Core\Router;

Router::addRoute('/', array('c' => 'TestController', 'a' => 'index'), 'GET');
Router::addRoute('/', array('c' => 'TestController', 'a' => 'post'), 'POST');

