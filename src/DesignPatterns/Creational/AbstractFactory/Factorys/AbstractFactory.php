<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/19
 * Time: 13:45
 */

namespace DesignPatterns\Creational\AbstractFactory\Factorys;


abstract class AbstractFactory
{
    public static function getFactory(ConcreteEnum $concrete): AbstractFactory
    {
        $factory = null;

        switch ($concrete->getValue()) {
            case ConcreteEnum::BLUE_CIRCLE:
                $factory = new BlueCircleFactory();
                break;
            case ConcreteEnum::RED_SQUARE:
                $factory = new RedSquareFactory();
                break;
        }

        return $factory;
    }

    abstract public function createShape();

    abstract public function createColor();
}