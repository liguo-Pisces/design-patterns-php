<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 15:16
 */

namespace DesignPatterns\Creational\FactoryMethod\Product;


class ProductA implements Product
{
    public function method()
    {
        return "Inside ProductA::method()";
    }
}