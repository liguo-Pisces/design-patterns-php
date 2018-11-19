<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/19
 * Time: 12:12
 */

namespace DesignPatterns\Creational\AbstractFactory\Shapes;


class Square implements Shape
{
    public function draw()
    {
        print "Inside Square::draw() method.";
    }
}