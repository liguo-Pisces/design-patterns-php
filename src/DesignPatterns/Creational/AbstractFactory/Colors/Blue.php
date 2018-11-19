<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/19
 * Time: 12:16
 */

namespace DesignPatterns\Creational\AbstractFactory\Colors;


class Blue implements Color
{
    public function fill()
    {
        print "Inside Blue::fill() method.";
    }
}