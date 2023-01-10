<?php

use App\PaymentGateway\Paddle\Transaction;


require_once __DIR__ . '/../vendor/autoload.php';

$paddleTransaction = new Transaction();

echo $paddleTransaction::STATUS_DECLINED;