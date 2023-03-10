--TEST--
Exhaustive test of verification and conversion of CP1252 text
--EXTENSIONS--
mbstring
--SKIPIF--
<?php
if (getenv("SKIP_SLOW_TESTS")) die("skip slow test");
?>
--FILE--
<?php
include('encoding_tests.inc');
testEncodingFromUTF16ConversionTable(__DIR__ . '/data/CP1252.txt', 'CP1252');

echo "Done!\n";
?>
--EXPECT--
Tested CP1252 -> UTF-16BE
Tested UTF-16BE -> CP1252
Done!
