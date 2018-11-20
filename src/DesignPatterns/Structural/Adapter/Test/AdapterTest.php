<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 17:29
 */

namespace DesignPatterns\Structural\Adapter\Test;


use DesignPatterns\Structural\Adapter\Adaptee;
use DesignPatterns\Structural\Adapter\Adaptor;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testClient()
    {
        $adaptor = new Adaptor(new Adaptee());
        $this->assertEquals("1 + 2 = 3", $adaptor->wrapper());
    }
}