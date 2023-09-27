<?php

class Burger
{
    protected int $size;
    protected bool $cheese = false;
    protected bool $pepperoni = false;
    protected bool $lettuce = false;
    protected bool $tomato = false;

    public function __construct(BurgerBuilder $burgerBuilder)
    {
        $this->size = $burgerBuilder->size;
        $this->cheese = $burgerBuilder->cheese;
        $this->pepperoni = $burgerBuilder->pepperoni;
        $this->lettuce = $burgerBuilder->lettuce;
        $this->tomato = $burgerBuilder->tomato;
    }
}

class BurgerBuilder
{
    public int $size;
    public bool $cheese = false;
    public bool $pepperoni = false;
    public bool $lettuce = false;
    public bool $tomato = false;

    public function __construct(int $size)
    {
        $this->size = $size;
    }

    public function addPepperoni(): static
    {
        $this->pepperoni = true;
        return $this;
    }

    public function addLettuce(): static
    {
        $this->lettuce = true;
        return $this;
    }

    public function addCheese(): static
    {
        $this->cheese = true;
        return $this;
    }

    public function addTomato(): static
    {
        $this->tomato = true;
        return $this;
    }

    public function build(): Burger
    {
        return new Burger($this);
    }
}

$burger = (new BurgerBuilder(14))
                            ->addPepperoni()
                            ->addLettuce()
                            ->addTomato()
                            ->addCheese()
                            ->build();