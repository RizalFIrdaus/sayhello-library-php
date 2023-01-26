<?php

namespace rizalfirdaus\Belajar;

class sayHello
{
    public function __construct(private string $name, private int $age)
    {
    }

    public function sayHello(): void
    {
        echo "Hello $this->name !, i'am $this->age years old" . PHP_EOL;
    }
}
