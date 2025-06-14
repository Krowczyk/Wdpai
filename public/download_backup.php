<?php

require_once __DIR__ . '/../config.php';


$backupFile = 'backup_' . date('Y-m-d_H-i-s') . '.sql';


$backupPath = download_backup . phpsys_get_temp_dir() . DIRECTORY_SEPARATOR . $backupFile;


putenv("PGPASSWORD=" . PASSWORD);

$command = "pg_dump -h " . HOST . " -U " . USERNAME . " -d " . DATABASE . " -f " . escapeshellarg($backupPath);


exec($command, $output, $return_var);


if ($return_var !== 0 || !file_exists($backupPath)) {
    echo "Błąd podczas eksportu bazy danych.";
    exit;
}

header('Content-Type: application/sql');
header('Content-Disposition: attachment; filename="' . $backupFile . '"');
header('Content-Length: ' . filesize($backupPath));


readfile($backupPath);


unlink($backupPath);
exit;