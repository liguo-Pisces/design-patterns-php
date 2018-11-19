<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/19
 * Time: 14:34
 */

namespace DesignPatterns\Creational\AbstractFactory\Tests;

use DesignPatterns\Creational\AbstractFactory\Colors\Blue;
use DesignPatterns\Creational\AbstractFactory\Colors\Red;
use DesignPatterns\Creational\AbstractFactory\Factorys\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\Factorys\ConcreteEnum;
use DesignPatterns\Creational\AbstractFactory\Shapes\Circle;
use DesignPatterns\Creational\AbstractFactory\Shapes\Square;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testClient()
    {
        $blueCircleFactory = AbstractFactory::getFactory(new ConcreteEnum(ConcreteEnum::BLUE_CIRCLE));
        $circle = $blueCircleFactory->createShape();
        $this->assertInstanceOf(Circle::class, $circle);
        $blue = $blueCircleFactory->createColor();
        $this->assertInstanceOf(Blue::class, $blue);

        $redSquareFactory = AbstractFactory::getFactory(new ConcreteEnum(ConcreteEnum::RED_SQUARE));
        $square = $redSquareFactory->createShape();
        $this->assertInstanceOf(Square::class, $square);
        $red = $redSquareFactory->createColor();
        $this->assertInstanceOf(Red::class, $red);
    }
}