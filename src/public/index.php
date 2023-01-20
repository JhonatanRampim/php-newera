<?php

require_once __DIR__ . '/../vendor/autoload.php';

$coffeeMaker = new \App\CoffeeMaker();
$coffeeMaker->makeCoffee();

$coffeeMaker = new \App\CappuccinoMaker();
$coffeeMaker->makeCappuccino();
$coffeeMaker->makeCoffee();

$coffeeMaker = new \App\LatteMaker();
$coffeeMaker->makeLatte();
$coffeeMaker->makeCoffee();

$allInOneCoffeeMaker = new \App\AllInOneCoffeeMaker();
$allInOneCoffeeMaker->makeLatte();
$allInOneCoffeeMaker->makeCoffee();
$allInOneCoffeeMaker->makeCappuccino();