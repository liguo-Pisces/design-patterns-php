<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 10:12
 */

namespace DesignPatterns\Creational\AbstractFactory\Product\ProductB;


class BProductB extends AbstractProductB
{
    public function AMethod()
    {
        echo "Inside 2ProductB::AMethod() method.";
    }
}