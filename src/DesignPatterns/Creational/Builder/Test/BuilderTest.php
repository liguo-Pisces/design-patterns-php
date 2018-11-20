<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 11:08
 */

namespace DesignPatterns\Creational\Builder\Test;


use DesignPatterns\Creational\Builder\Builder\ConcreteBuilderA;
use DesignPatterns\Creational\Builder\Builder\ConcreteBuilderB;
use DesignPatterns\Creational\Builder\Director\Director;
use DesignPatterns\Creational\Builder\Product\APropertyA;
use DesignPatterns\Creational\Builder\Product\APropertyB;
use DesignPatterns\Creational\Builder\Product\BPropertyA;
use DesignPatterns\Creational\Builder\Product\BPropertyB;
use DesignPatterns\Creational\Builder\Product\Product;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testClient()
    {
        $director = new Director(new ConcreteBuilderA(new Product()));
        $director->construct();
        $product = $director->getProduct();
        $this->assertInstanceOf(Product::class, $product);
        $this->assertInstanceOf(APropertyA::class, $product->getProductPropertyA());
        $this->assertInstanceOf(APropertyB::class, $product->getProductPropertyB());

        $director = new Director(new ConcreteBuilderB(new Product()));
        $director->construct();
        $product = $director->getProduct();
        $this->assertInstanceOf(Product::class, $product);
        $this->assertInstanceOf(BPropertyA::class, $product->getProductPropertyA());
        $this->assertInstanceOf(BPropertyB::class, $product->getProductPropertyB());
    }
}