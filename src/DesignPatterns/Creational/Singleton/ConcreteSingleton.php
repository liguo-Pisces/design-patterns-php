<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 16:36
 */

namespace DesignPatterns\Creational\Singleton;


class ConcreteSingleton extends Singleton
{
    private $propertyA = '';

    public function getPropertyA(): string
    {
        return $this->propertyA;
    }

    public function setPropertyA(string $propertyA)
    {
        $this->propertyA = $propertyA;
    }
}