<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 17:28
 */

namespace DesignPatterns\Structural\Adapter;


class Adaptor
{
    protected $adaptee = null;

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function wrapper()
    {
        return $this->adaptee->getPropertyA().' + '.$this->adaptee->getPropertyB().' = 3';
    }
}