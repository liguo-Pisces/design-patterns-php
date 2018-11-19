<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/19
 * Time: 12:13
 */

namespace DesignPatterns\Creational\AbstractFactory\Shapes;


class Circle implements Shape
{
    public function draw()
    {
        print "Inside Circle::draw() method.";
    }
}