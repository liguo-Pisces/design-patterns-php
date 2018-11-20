<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 10:17
 */

namespace DesignPatterns\Creational\AbstractFactory\Factory;


use DesignPatterns\Creational\AbstractFactory\Product\ProductA\BProductA;
use DesignPatterns\Creational\AbstractFactory\Product\ProductB\BProductB;

class ConcreteFactoryB extends AbstractFactory
{
    public function createProductA(): BProductA
    {
        return new BProductA();
    }

    public function createProductB(): BProductB
    {
        return new BProductB();
    }
}