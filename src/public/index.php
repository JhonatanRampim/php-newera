<?php

declare(strict_types=1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

require APP_PATH . '/App.php';
require APP_PATH . 'helpers.php';

$files = getAllTransactionFiles();
$expenseData = readFileContent($files[0]);
$totals = getTotals($expenseData);

$filesContent = [];
if ($files === 0) {
    echo 'dir is empty';
    return;
}

require VIEWS_PATH . '/home.php';