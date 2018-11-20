<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 18:04
 */

namespace DesignPatterns\Structural\Bridge\Implementor;


interface Implementor
{
    public function action(int $x, int $y);
}