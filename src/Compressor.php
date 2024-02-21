<?php
declare(strict_types=1);

namespace Kristos80\Compress;


final class Compressor implements CompressorInterface {

    /***
     * @param mixed $data
     * @return string
     */


    public function compress($data): string {
        return gmp_strval(gmp_init(bin2hex(gzencode(serialize($data))), 16), 62);
    }

    /**
     *
     * @param string $string
     * @return mixed
     */

    public function decompress(string $data): mixed {
        return unserialize(gzdecode(hex2bin(gmp_strval(gmp_init($data, 62), 16))));
    }

}

