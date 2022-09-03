<?php

declare(strict_types=1);

function getAllTransactionFiles(): array
{
    $scannedFiles = [];
    foreach (scandir(FILES_PATH) as $file) {
        if (is_dir($file)) {
            continue;
        }
        $scannedFiles[] = FILES_PATH . $file;
    }
    return $scannedFiles;
}

function readFileContent(string $file): array
{
    if (!is_file($file)) {
        return [];
    }
    $openedFiles = fopen($file, 'r');
    fgetcsv($openedFiles);
    $fileData = [];
    while (($content = fgetcsv($openedFiles)) !== false) {
        $fileData[] =  extractTransactions($content);
    }
    fclose($openedFiles);
    return $fileData;
}

function extractTransactions($transaction)
{
    [$date, $checkNumber, $description, $amount] = $transaction;
    $amount = (float) str_replace(['$', ','], '', $amount);

    return [
        'date' => $date,
        'check' => $checkNumber,
        'description' => $description,
        'amount' => $amount
    ];
}

function getTotals($expenseData)
{
    $totals = [];
    $totals['expense'] = 0;
    $totals['income'] = 0;
    $totals['net'] = 0;
    foreach ($expenseData as $key => $value) {
        if ($value['amount'] < 0) {
            $totals['expense'] += $value['amount'];
        }
        if ($value['amount'] > 0) {
            $totals['income'] += $value['amount'];
        }
    }
    $totals['net'] = $totals['income'] + $totals['expense'];
    return $totals;
}
