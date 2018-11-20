<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 10:07
 */

namespace DesignPatterns\Creational\AbstractFactory\Product\ProductA;


class AProductA extends AbstractProductA
{
    public function AMethod()
    {
        echo "Inside 1ProductA::AMethod() method.";
    }
}