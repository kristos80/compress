# 🔨 compress

Compress is a really minimal tool --in fact a wrapper for some chained low level functions-- that can compress any arbitrary piece of data (text, arrays, objects, etc.) 

The [`gmp` extension](https://www.php.net/manual/en/book.gmp.php) is required in order to work.

```PHP
<?php
declare(strict_types=1);

use Kristos80\Compress\Compress;

require_once __DIR__ . "/../vendor/autoload.php";

# A not so useful example, but you get the idea that anything can compressed as internally it gets serialized
$data = ["foo" => "dummy"];
# Prints wHFQO5fHxiiWjq7Pnd5dWK6yLNiIPGxWslAOBQMob81XgHJouEzr3zlNEN2RDQv2
echo $compressedData = Compress::compress($data);
# Dumps the `$data` array
print_r(Compress::decompress($compressedData));

# A more useful example
$longString = str_repeat("This is a very long string that actually is better to compress it to make it smaller", 100);
# Prints 3ds5WnDJjriKizqth86Zc9MBNQ3tQbzj7mwrqHNeMYZdPZBfIgqTQMkGzgr5dHNKmmkXlJhCM8fPYO5nxUbzNsdyGEipyNwSvVVRv2eEpmCjEVHcVzCk6yonW5BFf48ZXFhvNHPDJVp2PAo6EvP8PVXu3YpcmHrt22vByhgjP2msTPreXjmIu45Cswj3ICjt8U4
# Instead of the 8400 characters of the original string
echo Compress::compress($longString);
```
