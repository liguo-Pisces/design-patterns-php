<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 15:05
 */

namespace DesignPatterns\Creational\FactoryMethod\Creator;



use DesignPatterns\Creational\FactoryMethod\Product\Product;
use DesignPatterns\Creational\FactoryMethod\Product\ProductB;

class FactoryMethodB implements AbstractFactoryMethod
{
    protected $productB;

    public function __construct()
    {
        $this->productB = new ProductB();
    }

    public function makeProduct(): Product
    {
        return $this->productB;
    }
}