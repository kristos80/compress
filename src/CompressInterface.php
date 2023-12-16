<?php
declare(strict_types=1);

namespace Kristos80\Compress;

interface CompressInterface {

	/**
	 * @param mixed $data
	 * @return string
	 */
	public static function compress(mixed $data): string;

	/**
	 * @param string $compressedData
	 * @return mixed
	 */
	public static function decompress(string $compressedData): mixed;
}