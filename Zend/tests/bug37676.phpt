--TEST--
Bug #37676 using Array access operator [] on boolean variable does not show Notice
--FILE--
<?php
error_reporting(-1);

$bool = false;
echo $bool['foo'];

$int = 0;
echo $int['foo'];
--EXPECTF--
PHP Notice:  Cannot access boolean as array in /home/josh/aa.php on line 5
PHP Notice:  Cannot access integer as array in /home/josh/aa.php on line 8
