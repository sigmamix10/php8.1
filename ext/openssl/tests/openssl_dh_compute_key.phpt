--TEST--
openssl_dh_compute_key()
--EXTENSIONS--
openssl
--FILE--
<?php

$privateKey = <<<'KEY'
-----BEGIN PRIVATE KEY-----
MIICJgIBADCCARcGCSqGSIb3DQEDATCCAQgCggEBANn6weB11zG7izhfzM4qsITZ
3q/ORkF6+h3RTn7sh8Ji1MpHt3zHcPfdYFvs7V5SJfNN5Xv9L62RN8GwgxwRWIJr
8VBHfL3LyZNMMgnGBGJR0qmoM48iNd8i2ggZYj+H8WVh2y6tGw1YsDI3AFHpZFkN
TvCT1JHl2JfNEgOgSryBO84KDEWLxWaN/4Nqa9x5R0fxKMLjpWNRzEBBKcVeEHIZ
gzl7VKVJEpYC336sjYJE19ZD0O/gWl+q4WeRpDazDi6LDLZgnoDrUgbNAXtDETKL
gKOnYq+iwRWCQicQmaQvGXntmgdriExVacrRnH8o09ioxcVdtPG8WuLeqJczCvsC
AQIEggEEAoIBAH1yv00aZkw/7IIAJL1fZUrpVeO3xKIQDl982HOKS32+o2mUJWbc
DuDMIOvqiUEltEnFQOqDaJue0ucseJdH5Q9JHlSIhuUQiPB/JfEcPlb2QYzXHuAE
fWS94X0wiSxYgKXIL0XceA3yg5bYhDSR3DntdJrbboyYHt/QGQ8WCWiYEa402ovI
x+r7k3BlGxah33HeuqhMCFAfFvWUhLaj85QEmjHTjVMKeeTlNfBS+nscbCcZvLXd
qanvRxYYGdOhgLTcJe/iUsxmAWVTiqrid8MEvtFrenanawTgnPXAp5WtYTCGcsiQ
TBG24ND/tnZpPoPz/Rwlpo1IL4IbvKGRsfU=
-----END PRIVATE KEY-----
KEY;

$publicKey = hex2bin("29ECC536A85A4AFAD7D63E50545C68CE44A834396886E9A7BAC27E3A08A14C05259BA6E9940FDC512457155A60CAFACD8E43897E1B537A282D39697B75357197B5E3AD7F1826C0216604496AFAEF8999FBCE336C148166AE23E77EC66C0611235110FA8D6180A26425154959FACEC18FEE3EDA68E9355627820C14B44B486C9547ECE62BE72D56A7FAC4747AFCF201D8A4155F63A076234D6BC04DE27E7A7849BF8956E3DB6E51C043CB6FC66889ADE1F8DE756E9194838E8EF8A5CF9C0DD553282DE8A3130CA7752C22C191E5C352AC3BD77EF9270BF37BC807BBDB3F39AE7966B013723E71EAF41082A056D994F64B428183C5BAFEE9C7A41CABCEA868FC34");

echo bin2hex(openssl_dh_compute_key($publicKey, openssl_get_privatekey($privateKey))), "\n";

?>
--EXPECT--
b0049944fa5d36f364dd02e675dde50f8c2d67481c5cf0fe2f248d383eec1d38c23d5ed2644fbef2676bcd6ce148361ca82619c8f93e10506cb89d0a1bdaa0f0bc6f68cef0f7cb6d97d43e8dda3c7a5c5a98ebd2342a605ce530fd46a0602d28d4afc48e92088d0bc42194ca8682a85317f812d81b86cd284eed405df2f76aae84ccd560856e8a3d0ce4f591394bca02eb8a1984ebb41bb19714fb8b579bcafd36a9051d51d075f66229893289d8a0c918bfd222f17803cc532d2cf93bb2a567953323ca409beb3237faae9c6fdfc671594324953badd07dd4770ee09fd19f90045654c5709e92aa614b83594c2f62a8bc3c7e786e54bc1259a0a737c70dd4cc
