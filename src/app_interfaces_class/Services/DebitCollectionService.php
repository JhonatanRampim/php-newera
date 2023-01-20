<?php

namespace App\Services;

use App\CollectionAgency;
use App\Interfaces\DebtCollector;

class DebitCollectionService
{
    public function collectDebit(DebtCollector $collector)
    {
        $owedAmount = mt_rand(100, 1000);
        $collectedAmount = $collector->collect($owedAmount);

        echo "Collected $ $collectedAmount out of $ $owedAmount \n";
    }
}