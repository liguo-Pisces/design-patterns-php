<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 11:08
 */

namespace DesignPatterns\Creational\Builder\Builder;


use DesignPatterns\Creational\Builder\Product\BPropertyA;
use DesignPatterns\Creational\Builder\Product\BPropertyB;
use DesignPatterns\Creational\Builder\Product\Product;

class ConcreteBuilderB implements Builder
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function buildPartA()
    {
        $this->product->setProductPropertyA(new BPropertyA());
    }

    public function buildPartB()
    {
        $this->product->setProductPropertyB(new BPropertyB());
    }

    public function getProduct()
    {
        return $this->product;
    }
}