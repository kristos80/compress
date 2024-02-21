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

        $compressor = CompressFactory::create();
        $compressedData = $compressor->compress($data);

        $this->assertEquals($data, $compressor->decompress($compressedData));

        // Test compression of a long string
        $longString = str_repeat("A very very very long string", 100);
        $compressedLongString = $compressor->compress($longString);
        $this->assertGreaterThan(strlen($compressedLongString), strlen($longString));

        // Test decompression of a long string
        $this->assertEquals($longString, $compressor->decompress($compressedLongString));

    }

}
