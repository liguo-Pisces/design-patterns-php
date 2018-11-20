<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 15:05
 */

namespace DesignPatterns\Creational\FactoryMethod\Creator;


use DesignPatterns\Creational\FactoryMethod\Product\Product;
use DesignPatterns\Creational\FactoryMethod\Product\ProductA;

class FactoryMethodA implements AbstractFactoryMethod
{
    protected $productA;

    public function __construct()
    {
        $this->productA = new ProductA();
    }

    public function makeProduct(): Product
    {
        return $this->productA;
    }
}