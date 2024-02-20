<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Kristos80\Compress\CompressFactory;


final class CompressTest extends TestCase
{

    /**
     * @return void
     */
    public function testCompression(): void
    {
        // Test compression and decompression with simple data
        $data = ["foo" => "dummy"];

        $compressData = CompressFactory::compressData($data);
        $compressedData = $compressData->compress();
        $decompressedData = $compressData->decompress($compressedData);

        $this->assertEquals($data, $decompressedData);

        // Test compression of a long string
        $longString = str_repeat("A very very very long string", 100);
        $compressLongString = CompressFactory::compressData($longString);
        $compressedLongString = $compressLongString->compress();
        $this->assertGreaterThan(strlen($compressedLongString), strlen($longString));

        // Test decompression of a long string
        $decompressedLongString = $compressLongString->decompress($compressedLongString);
        $this->assertEquals($longString, $decompressedLongString);

    }

}
