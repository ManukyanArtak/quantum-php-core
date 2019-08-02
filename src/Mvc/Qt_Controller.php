<?php

/**
 * Quantum PHP Framework
 *
 * An open source software development framework for PHP
 *
 * @package Quantum
 * @author Arman Ag. <arman.ag@softberg.org>
 * @copyright Copyright (c) 2018 Softberg LLC (https://softberg.org)
 * @link http://quantum.softberg.org/
 * @since 1.0.0
 */

namespace Quantum\Mvc;


use Quantum\Routes\RouteController;

/**
 * Base Controller Class
 *
 * Qt_Controller class is a base class that every controller should extend
 *
 * @package Quantum
 * @subpackage MVC
 * @category MVC
 */
class Qt_Controller extends RouteController
{

    /**
     * Reference of the Qt object
     * @var object
     */
    private static $instance;

    /**
     * GetInstance
     *
     * Gets the Qt singleton
     *
     * @return object
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }


}
