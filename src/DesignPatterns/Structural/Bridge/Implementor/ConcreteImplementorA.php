<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 18:06
 */

namespace DesignPatterns\Structural\Bridge\Implementor;


class ConcreteImplementorA implements Implementor
{
    public function action(int $x, int $y)
    {
        return sprintf("Inside ConcreteImplementorA::action(%d, %d)", $x, $y);
    }
}