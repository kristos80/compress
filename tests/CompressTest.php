<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Kristos80\Compress\Compress;

final class CompressTest extends TestCase
{

    /**
     * @return void
     */
    public function testCompression(): void
    {
        // Test compression and decompression with simple data
        $data = ["foo" => "dummy"];
        $compressor = new Compress();
        $compressedData = $compressor->compress($data);
        $decompressedData = $compressor->decompress($compressedData);

        $this->assertEquals($data, $decompressedData);

        // Test compression of a long string
        $longString = str_repeat("A very very very long string", 100);
        $compressedLongString = $compressor->compress($longString);
        $this->assertGreaterThan(strlen($compressedLongString), strlen($longString));

        // Test decompression of a long string
        $decompressedLongString = $compressor->decompress($compressedLongString);
        $this->assertEquals($longString, $decompressedLongString);

        // Test decompression with invalid compressed data
        $invalidCompressedData = "invalid_compressed_data";
        $this->expectException(\ValueError::class); // Expect error
        $compressor->decompress($invalidCompressedData);
    }

}
