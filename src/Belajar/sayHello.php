<?php

namespace rizalfirdaus\Belajar;

interface Setter
{
    public function setName(string $name): void;
    public function setAge(int $age): void;
}
interface Getter
{
    public function getName(): string;
    public function getAge(): int;
}

class sayHello implements Setter, Getter
{
    public function __construct(private string $name, private int $age)
    {
    }

    public function sayHello(): void
    {
        echo "Hello $this->name !, i'am $this->age years old" . PHP_EOL;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function setAge(int $age): void
    {
        $this->age = $age;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getAge(): int
    {
        return $this->age;
    }
}
