<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 18:14
 */

namespace DesignPatterns\Structural\Bridge\Test;


use DesignPatterns\Structural\Bridge\Abstraction\RefinedAbstraction;
use DesignPatterns\Structural\Bridge\Implementor\ConcreteImplementorA;
use DesignPatterns\Structural\Bridge\Implementor\ConcreteImplementorB;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testClient()
    {
        $refined1 = new RefinedAbstraction(1, 2, new ConcreteImplementorA());
        $this->assertEquals("Inside ConcreteImplementorA::action(1, 2)", $refined1->action());

        $refined2 = new RefinedAbstraction(3, 4, new ConcreteImplementorB());
        $this->assertEquals("Inside ConcreteImplementorB::action(3, 4)", $refined2->action());
    }
}