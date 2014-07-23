<?php
/**
 * Session Helper
 *
 * PHP Version 5.4
 *
 * @category Helper
 * @package  Session
 * @author   Antoine Knockaert <antoine.knockaert@epitech.eu>
 * @license  MIT
 * @link     https://github.com/SimpleAPI
 */

use SimpleAPI\Core\Helper;

/**
 * Class Session Helper
 *
 * @category Helper
 * @package  Session
 * @author   Antoine Knockaert <antoine.knockaert@epitech.eu>
 * @license  MIT
 * @link     https://github.com/SimpleAPI
 */
class SessionHelper extends Helper
{

    /**
     * The instance class
     *
     * @var SessionHelper $instance
     */
    protected static $instance;

    /**
     * Global constructor of this class
     */
    protected function __construct()
    {

    }

    /**
     * Copy constructor
     *
     * @codeCoverageIgnore
     */
    protected function __clone()
    {

    }


}