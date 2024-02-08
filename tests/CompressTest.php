<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Kristos80\Compress\Compress;

final class CompressTest extends TestCase {

	/**
	 * @return void
	 */
	public function testCompression(): void {
		$data = ["foo" => "dummy"];
        $compressor = new Compress();
        $compressedData = $compressor->compress($data);
        $decompressedData = $compressor->decompress($compressedData);

		$this->assertEquals($data, $decompressedData);

		$longString = str_repeat("A very very very long string", 100);
		$compressedLongString = $compressor->compress($longString);
		$this->assertTrue(strlen($longString) > strlen($compressedLongString));
	}

}
