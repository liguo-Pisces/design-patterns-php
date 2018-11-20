<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 15:08
 */

namespace DesignPatterns\Creational\FactoryMethod\Test;


use DesignPatterns\Creational\FactoryMethod\Creator\FactoryMethodA;
use DesignPatterns\Creational\FactoryMethod\Creator\FactoryMethodB;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testClient()
    {
        $factoryMethod = new FactoryMethodA();
        $productA = $factoryMethod->makeProduct();
        $this->assertEquals("Inside ProductA::method()", $productA->method());

        $factoryMethod = new FactoryMethodB();
        $productB = $factoryMethod->makeProduct();
        $this->assertEquals("Inside ProductB::method()", $productB->method());
    }
}