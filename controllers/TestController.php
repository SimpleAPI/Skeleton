<?php
/**
 * Test Controller
 *
 * PHP Version 5.4
 *
 * @category Controller
 * @package  Test
 * @author   Antoine Knockaert <antoine.knockaert@epitech.eu>
 * @license  GPL v3
 * @link     http://jenkins.knck.eu
 */

/**
 * Class TestController
 *
 * @category Controller
 * @package  Test
 * @author   Antoine Knockaert <antoine.knockaert@epitech.eu>
 * @license  GPL v3
 * @link     http://jenkins.knck.eu
 */
class TestController extends AppController
{

    protected static $instance;

    protected function __construct()
    {
        parent::__construct();
    }

    /**
     * @codeCoverageIgnore
     */
    protected function __clone()
    {
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function index() {
        $this->response->setResponse(404, "test");

    }

}