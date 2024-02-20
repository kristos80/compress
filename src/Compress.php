<?php
declare(strict_types=1);

namespace Kristos80\Compress;


class Compress {

    /***
     * @param mixed $data
     * @return string
     */

    private $dataToCompress;

    public function __construct($data)
    {
        $this->dataToCompress = $data;

    }
    public  function compress(): string {
        return gmp_strval(gmp_init(bin2hex(gzencode(serialize($this->dataToCompress))), 16), 62);
    }

    /**
     *
     * @param string $string
     * @return mixed
     */

    public function decompress(string $compressedData): mixed {
        return unserialize(gzdecode(hex2bin(gmp_strval(gmp_init($compressedData, 62), 16))));
    }

}

