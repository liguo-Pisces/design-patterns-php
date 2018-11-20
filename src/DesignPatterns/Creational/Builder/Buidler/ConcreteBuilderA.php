<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 11:01
 */

namespace DesignPatterns\Creational\Builder\Builder;


use DesignPatterns\Creational\Builder\Product\APropertyA;
use DesignPatterns\Creational\Builder\Product\APropertyB;
use DesignPatterns\Creational\Builder\Product\Product;

class ConcreteBuilderA implements Builder
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function buildPartA()
    {
        $this->product->setProductPropertyA(new APropertyA());
    }

    public function buildPartB()
    {
        $this->product->setProductPropertyB(new APropertyB());
    }

    public function getProduct()
    {
        return $this->product;
    }
}