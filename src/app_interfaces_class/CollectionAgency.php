<?php

namespace App;

use App\Interfaces\DebtCollector;

class CollectionAgency implements DebtCollector
{

    /**
     * @param float $owedAmount
     * @return float
     */
    public function collect(float $owedAmount): float
    {
        $guaranted = $owedAmount * 0.5;

        return mt_rand($guaranted, $owedAmount);
    }
}