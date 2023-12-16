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
		$compressedData = Compress::compress($data);

		$this->assertEquals($data, Kristos80\Compress\Compress::decompress($compressedData));

		$longString = str_repeat("A very very very long string", 100);
		$compressedLongString = Compress::compress($longString);
		$this->assertTrue(strlen($longString) > strlen($compressedLongString));
	}

}
