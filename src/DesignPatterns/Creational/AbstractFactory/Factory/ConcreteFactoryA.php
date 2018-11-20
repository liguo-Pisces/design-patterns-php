<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 10:16
 */

namespace DesignPatterns\Creational\AbstractFactory\Factory;


use DesignPatterns\Creational\AbstractFactory\Product\ProductA\AProductA;
use DesignPatterns\Creational\AbstractFactory\Product\ProductB\AProductB;

class ConcreteFactoryA extends AbstractFactory
{
    public function createProductA(): AProductA
    {
        return new AProductA();
    }

    public function createProductB(): AProductB
    {
        return new AProductB();
    }
}