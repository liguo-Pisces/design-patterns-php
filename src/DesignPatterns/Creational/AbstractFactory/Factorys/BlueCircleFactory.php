<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/19
 * Time: 14:23
 */

namespace DesignPatterns\Creational\AbstractFactory\Factorys;

use DesignPatterns\Creational\AbstractFactory\Colors\Blue;
use DesignPatterns\Creational\AbstractFactory\Shapes\Circle;

class BlueCircleFactory extends AbstractFactory
{
    public function createShape()
    {
        return new Circle();
    }

    public function createColor()
    {
        return new Blue();
    }
}