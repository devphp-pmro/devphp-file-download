<?php

use Src\devphp\Download;

require_once __DIR__."/../vendor/autoload.php";

$dl = new Download();
$dl->downloadExec(
    $_SERVER['DOCUMENT_ROOT']."/devphp-file-download/exemplo/",
    "file.txt"
);
