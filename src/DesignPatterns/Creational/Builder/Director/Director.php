<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 11:05
 */

namespace DesignPatterns\Creational\Builder\Director;


use DesignPatterns\Creational\Builder\Builder\Builder;
use DesignPatterns\Creational\Builder\Product\Product;

class Director
{
    private $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function construct()
    {
        $this->builder->buildPartA();
        $this->builder->buildPartB();
    }

    public function getProduct(): Product
    {
        return $this->builder->getProduct();
    }
}