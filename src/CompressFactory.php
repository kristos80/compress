<?php

namespace Kristos80\Compress;

final class CompressFactory {
    public static function create(): CompressorInterface {
        if (extension_loaded('gmp')) {
            return new Compressor();
        } else {
            return new MinimalCompressor();
        }
    }
}
