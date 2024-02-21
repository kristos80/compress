<?php

namespace Kristos80\Compress;

final class CompressFactory {
    public static function create(): CompressorInterface {
        return new Compressor();
    }
}
