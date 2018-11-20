<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 16:34
 */

namespace DesignPatterns\Creational\Singleton\Test;


use DesignPatterns\Creational\Singleton\ConcreteSingleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testClient()
    {
        $instantce1 = ConcreteSingleton::getInstance();
        $instantce2 = ConcreteSingleton::getInstance();
        $this->assertSame($instantce1, $instantce2);

        $instantce1->setPropertyA("instence1 set PropertyA");
        $this->assertEquals("instence1 set PropertyA", $instantce2->getPropertyA());
    }
}