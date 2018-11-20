<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 15:17
 */

namespace DesignPatterns\Creational\FactoryMethod\Product;


class ProductB implements Product
{
    public function method()
    {
        return "Inside ProductB::method()";
    }
}