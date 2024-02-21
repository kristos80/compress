<?php

namespace Kristos80\Compress;

final class MinimalCompressor implements CompressorInterface
{
    /***
     * @param mixed $data
     * @return string
     */

    public function compress(mixed $data): string {
        return base64_encode(serialize($data));
    }

    /**
     *
     * @param string $string
     * @return mixed
     */

    public function decompress(string $data): mixed {
        return unserialize(base64_decode($data));
    }
}
