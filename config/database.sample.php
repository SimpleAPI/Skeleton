<?php
/**
 * Database configuration
 *
 * PHP Version 5.4
 *
 * @category Configuration
 * @package  Database
 * @author   Antoine Knockaert <antoine.knockaert@epitech.eu>
 * @license  MIT
 * @link     https://github.com/SimpleAPI
 */

ORM::configure('mysql:host=HOST;dbname=DATABASE');
ORM::configure('username', 'USER');
ORM::configure('password', 'PASSWORD');
ORM::configure('logging', true);
ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));