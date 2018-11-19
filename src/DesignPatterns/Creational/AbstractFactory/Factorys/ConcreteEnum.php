<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/19
 * Time: 14:18
 */

namespace DesignPatterns\Creational\AbstractFactory\Factorys;

use DesignPatterns\Creational\AbstractFactory\Commons\SimpleEnum;

class ConcreteEnum extends SimpleEnum
{
    const BLUE_CIRCLE = 1;
    const RED_SQUARE = 2;
}