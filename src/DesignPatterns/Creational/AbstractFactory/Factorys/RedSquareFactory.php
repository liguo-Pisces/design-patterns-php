<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/19
 * Time: 14:23
 */

namespace DesignPatterns\Creational\AbstractFactory\Factorys;

use DesignPatterns\Creational\AbstractFactory\Colors\Red;
use DesignPatterns\Creational\AbstractFactory\Shapes\Square;

class RedSquareFactory extends AbstractFactory
{
    public function createShape()
    {
        return new Square();
    }

    public function createColor()
    {
        return new Red();
    }
}