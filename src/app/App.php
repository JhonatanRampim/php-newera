<?php

declare(strict_types=1);

$files = getAllTransactionFiles();
$filesContent = [];
if ($files === 0) {
    echo 'dir is empty';
}

$filesContent = readFileContent($files[0]);
$tableHeader = $filesContent[0];
$tableBody = array_values(array_filter($filesContent, fn ($key) => $key > 0, ARRAY_FILTER_USE_KEY));


function getAllTransactionFiles(): array
{
    if (!is_dir(FILES_PATH)) {
        return [];
    }
    $directories = scandir(FILES_PATH);
    $scannedFiles = array_values(array_filter($directories, fn ($val, $key) => $val[$key] > 1, ARRAY_FILTER_USE_BOTH));
    return $scannedFiles;
}

function readFileContent(string $file): array
{
    $fileData = [];
    if (!is_file(FILES_PATH . $file)) {
        return [];
    }
    $openedFiles = fopen(FILES_PATH . $file, 'r');
    while (($content = fgetcsv($openedFiles)) !== false) {
        $fileData[] = $content;
    }
    fclose($openedFiles);
    return $fileData;
}
