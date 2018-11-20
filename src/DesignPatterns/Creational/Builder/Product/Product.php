<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 13:48
 */

namespace DesignPatterns\Creational\Builder\Product;


class Product
{
    protected $productPropertyA;

    protected $productPropertyB;

    public function setProductPropertyA(PropertyA $productPropertyA)
    {
        $this->productPropertyA = $productPropertyA;
    }

    public function getProductPropertyA(): PropertyA
    {
        return $this->productPropertyA;
    }

    public function setProductPropertyB(PropertyB $productPropertyB)
    {
        $this->productPropertyB = $productPropertyB;
    }

    public function getProductPropertyB(): PropertyB
    {
        return $this->productPropertyB;
    }
}