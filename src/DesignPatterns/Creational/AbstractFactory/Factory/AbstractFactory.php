<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 10:14
 */

namespace DesignPatterns\Creational\AbstractFactory\Factory;


abstract class AbstractFactory
{
    abstract public function createProductA();

    abstract public function createProductB();
}