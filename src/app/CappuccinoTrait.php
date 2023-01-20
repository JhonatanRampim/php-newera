<?php
namespace App;

trait CappuccinoTrait
{
    public function makeCappuccino()
    {
        echo static::class . ' is making cappuccino  <br/>';
    }

}