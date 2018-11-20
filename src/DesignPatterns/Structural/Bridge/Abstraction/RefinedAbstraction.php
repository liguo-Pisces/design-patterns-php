<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/20
 * Time: 18:12
 */

namespace DesignPatterns\Structural\Bridge\Abstraction;


use DesignPatterns\Structural\Bridge\Implementor\Implementor;

class RefinedAbstraction implements Abstraction
{
    private $x;

    private $y;

    private $implementor;

    public function __construct(int $x, int $y, Implementor $implementor)
    {
        $this->x = $x;
        $this->y = $y;
        $this->implementor = $implementor;
    }

    public function action(): string
    {
        return $this->implementor->action($this->x, $this->y);
    }
}