<?php

namespace Kristos80\Compress;

final class MinimalCompressor
{
    /***
     * @param mixed $data
     * @return string
     */

    public function compress(mixed $data): string {
      return base64_encode(implode('.',$data));
    }

    /**
     *
     * @param string $string
     * @return mixed
     */

    public function decompress(string $data): mixed {
        return explode(',', base64_decode($data));
    }
}

$compressor = new MinimalCompressor();
$compressedData = $compressor->compress([ "foo" => "dummy"]);
echo $compressedData;
print_r($compressor->decompress($compressedData));
