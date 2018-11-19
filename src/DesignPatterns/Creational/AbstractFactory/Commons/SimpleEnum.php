<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/19
 * Time: 17:40
 */

namespace DesignPatterns\Creational\AbstractFactory\Commons;


abstract class SimpleEnum
{
    protected $value = '';

    public function __construct($value)
    {
        $reflection = new \ReflectionClass(get_called_class());
        if (!in_array($value, $reflection->getConstants())) {
            throw new \Exception("Error");
        }

        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function __toString()
    {
        return strval($this->value);
    }
}
