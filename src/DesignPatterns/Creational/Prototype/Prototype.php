<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 16:06
 */

namespace DesignPatterns\Creational\Prototype;


abstract class Prototype
{
    protected $propertyA;

    protected $propertyB;

    abstract public function __clone();

    public function getPropertyA()
    {
        return $this->propertyA;
    }

    public function setPropertyA($propertyA)
    {
        $this->propertyA = $propertyA;
    }

    public function getPropertyB()
    {
        return $this->propertyB;
    }
}