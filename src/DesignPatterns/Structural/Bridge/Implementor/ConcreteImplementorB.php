<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 18:08
 */

namespace DesignPatterns\Structural\Bridge\Implementor;


class ConcreteImplementorB implements Implementor
{
    public function action(int $x, int $y)
    {
        return sprintf("Inside ConcreteImplementorB::action(%d, %d)", $x, $y);
    }
}