<?php

require_once __DIR__ . "/vendor/autoload.php";

use Hello\Hello\Belajar\sayHello;

$say = new sayHello("Rizal", 22);
$say->sayHello();
