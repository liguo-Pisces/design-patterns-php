<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 16:08
 */

namespace DesignPatterns\Creational\Prototype;


class ConcretePrototypeA extends Prototype
{
    public function __construct()
    {
        $this->propertyB = 'ConcretePrototypeA->propertyB';
    }

    public function __clone()
    {

    }
}