<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 10:52
 */

namespace DesignPatterns\Creational\Builder\Builder;


interface Builder
{
    public function buildPartA();

    public function buildPartB();

    public function getProduct();
}