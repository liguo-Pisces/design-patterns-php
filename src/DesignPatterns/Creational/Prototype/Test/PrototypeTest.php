<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 16:04
 */

namespace DesignPatterns\Creational\Prototype;


use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testClient()
    {
        $prototype = new PrototypeA();

        $prototype1 = clone $prototype;
        $prototype1->setPropertyA('Once');
        $this->assertEquals("Once", $prototype1->getPropertyA());
        $this->assertEquals("PrototypeA->propertyB", $prototype1->getPropertyB());

        $prototype2 = clone $prototype;
        $prototype2->setPropertyA('Twice');
        $this->assertEquals("Twice", $prototype2->getPropertyA());
        $this->assertEquals("PrototypeA->propertyB", $prototype2->getPropertyB());
    }
}