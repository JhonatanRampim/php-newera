<?php

namespace App;

use App\Interfaces\DebtCollector;

class AgiotaAgency implements DebtCollector
{

    /**
     * @param float $owedAmount
     * @return float
     */
    public function collect(float $owedAmount): float
    {
        return $owedAmount * 0.65;
    }
}