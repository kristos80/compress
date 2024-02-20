<?php
declare(strict_types=1);

use Kristos80\Compress\CompressFactory;


require_once __DIR__ . "/../vendor/autoload.php";

$data = ["foo" => "dummy"];

$compressData = CompressFactory::compressData($data);
$compressedData = $compressData->compress();
echo $compressedData;
echo PHP_EOL;
$decompressData = CompressFactory::compressData($compressedData);
print_r($decompressData->decompress());

$longString = str_repeat("This is a very long string that actually is better to compress it to make it smaller", 100);
$compressData = CompressFactory::compressData($longString);
echo $compressData->compress();
echo PHP_EOL;
echo strlen($longString);
