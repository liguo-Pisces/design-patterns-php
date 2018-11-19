<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/19
 * Time: 12:14
 */

namespace DesignPatterns\Creational\AbstractFactory\Colors;


class Red implements Color
{
    public function fill()
    {
        print "Inside Red::fill() method.";
    }
}