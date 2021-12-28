<?php

namespace classDir;

class Calculator
{
    private int $number2;
    private int $number1;

    /**
     * @return int
     */
    public function getNumber1():int
    {
        return $this->number1;
    }

    /**
     * @param int $number1
     */
    public function setNumber1(int $number1)
    {
        $this->number1 = $number1;
    }

    /**
     * @return int
     */
    public function getNumber2(): int
    {
        return $this->number2;
    }

    /**
     * @param int $number2
     */
    public function setNumber2(int $number2)
    {
        $this->number2 = $number2;
    }

    public function sum():int{
        return $this->getNumber1()+$this->getNumber2();
    }
    public function subtraction():int{
        return $this->getNumber1()-$this->getNumber2();
    }
    public function multiply():int{
        return $this->getNumber1()*$this->getNumber2();
    }
    public function division():int{
        return $this->getNumber1()/$this->getNumber2();
    }


}