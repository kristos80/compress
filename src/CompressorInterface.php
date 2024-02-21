<?php

namespace Kristos80\Compress;

interface CompressorInterface
{
    public function compress(mixed $data): string;
    public function decompress(string $data): mixed;


}