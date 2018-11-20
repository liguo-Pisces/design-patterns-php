<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 16:26
 */

namespace DesignPatterns\Creational\Singleton;


class Singleton
{
    private static $instance = null;

    private function __construct()
    {
    }

    final public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new static();
        }

        return self::$instance;
    }
}