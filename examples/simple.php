<?php
declare(strict_types=1);

use Kristos80\Compress\Compress;

require_once __DIR__ . "/../vendor/autoload.php";

$data = ["foo" => "dummy"];

$compressor = new Compress();
echo $compressedData = $compressor->compress($data);
echo PHP_EOL;
print_r($compressor->decompress($compressedData));

$longString = str_repeat("This is a very long string that actually is better to compress it to make it smaller", 100);
echo $compressedData = $compressor->compress($longString);
echo PHP_EOL;
echo strlen($longString);
