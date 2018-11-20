<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 17:29
 */

namespace DesignPatterns\Structural\Adapter;


class Adaptee
{
    private $propertyA = 1;

    private $propertyB = 2;

    public function getPropertyA(): int
    {
        return $this->propertyA;
    }

    public function getPropertyB(): int
    {
        return $this->propertyB;
    }
}