<?php 
require __DIR__ . '/vendor/autoload.php';

use App\Utils\StringUtil;
use App\Utils\WriteCsv;
use App\ReadLine;

$string = ReadLine::line();

$newString = new StringUtil($string);
echo $newString->ToUppercase();
echo "\n";

echo $newString->ToUpperLower();
echo "\n";

$csv = $newString->ToCommaSeparated();

$writeCsv = new WriteCsv($csv);
echo $writeCsv->write();
echo "\n";
