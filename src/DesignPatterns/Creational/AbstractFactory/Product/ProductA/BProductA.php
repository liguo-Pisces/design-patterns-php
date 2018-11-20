<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 10:10
 */

namespace DesignPatterns\Creational\AbstractFactory\Product\ProductA;


class BProductA extends AbstractProductA
{
    public function AMethod()
    {
        echo "Inside 2ProductA::AMethod() method.";
    }
}