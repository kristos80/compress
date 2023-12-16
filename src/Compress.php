<?php
declare(strict_types=1);

namespace Kristos80\Compress;

final class Compress implements CompressInterface {

	/***
	 * @param mixed $data
	 * @return string
	 */
	public static function compress(mixed $data): string {
		return gmp_strval(gmp_init(bin2hex(gzencode(serialize($data))), 16), 62);
	}

	/**
	 * @param string $compressedData
	 * @return mixed
	 */
	public static function decompress(string $compressedData): mixed {
		return unserialize(gzdecode(hex2bin(gmp_strval(gmp_init($compressedData, 62), 16))));
	}
}