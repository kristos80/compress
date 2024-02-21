<?php
declare(strict_types=1);

use Kristos80\Compress\CompressFactory;


require_once __DIR__ . "/../vendor/autoload.php";

$data = ["foo" => "dummy"];

$compressor = CompressFactory::create();
$compressedData = $compressor->compress($data);
echo $compressedData;
echo PHP_EOL;

print_r($compressor->decompress($compressedData));

$longString = str_repeat("This is a very long string that actually is better to compress it to make it smaller", 100);
$compressedData = $compressor->compress($longString);
echo $compressedData;
echo PHP_EOL;
echo strlen($longString);
