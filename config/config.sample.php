<?php
/**
 * Application configuration
 *
 * PHP Version 5.4
 *
 * @category Configuration
 * @package  Application
 * @author   Antoine Knockaert <antoine.knockaert@epitech.eu>
 * @license  MIT
 * @link     https://github.com/SimpleAPI
 */

use SimpleAPI\Core\Configuration;

Configuration::$config = array(
    'debug'                    => true,
    'mode'                     => 'development',
    'router.base.path'         => '/tekfeed/api',
    'csrf.key'                 => 'sfaedmdwdcnadJInININIUEWEEWCSDCOdwnincseiscns35asdy790r7329yrhjdkfn78q34ryq',
    'csrf.validity'            => '-1 hour',
    'security.allowedDomains'  => array(
        'http://127.0.0.1',
        'http://localhost',
        'http://api.tekfeed.knck.eu',
        'http://tekfeed.knck.eu',
        'https://api.tekfeed.knck.eu',
        'https://tekfeed.knck.eu'
    ),
    'security.json'            => false,
    'medias.uploadDir'         => '/tmp/',
    'medias.url'               => 'http://www.google.fr',
    'maintenance.enabled'      => false,
    'maintenance.enabledUntil' => '2014-06-20 20:00:00',
    'maintenance.message'      => 'Hello'
);