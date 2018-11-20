<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 10:24
 */

namespace DesignPatterns\Creational\AbstractFactory\Test;


use DesignPatterns\Creational\AbstractFactory\Factory\ConcreteFactoryA;
use DesignPatterns\Creational\AbstractFactory\Factory\ConcreteFactoryB;
use DesignPatterns\Creational\AbstractFactory\Product\ProductA\AProductA;
use DesignPatterns\Creational\AbstractFactory\Product\ProductA\BProductA;
use DesignPatterns\Creational\AbstractFactory\Product\ProductB\AProductB;
use DesignPatterns\Creational\AbstractFactory\Product\ProductB\BProductB;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testClient()
    {
        $concreteA = new ConcreteFactoryA();
        $AProductA = $concreteA->createProductA();
        $this->assertInstanceOf(AProductA::class, $AProductA);
        $AProductB = $concreteA->createProductB();
        $this->assertInstanceOf(AProductB::class, $AProductB);

        $concreteB = new ConcreteFactoryB();
        $BProductA = $concreteB->createProductA();
        $this->assertInstanceOf(BProductA::class, $BProductA);
        $BProductB = $concreteB->createProductB();
        $this->assertInstanceOf(BProductB::class, $BProductB);
    }
}