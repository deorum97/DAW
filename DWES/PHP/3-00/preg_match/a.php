<?php

$string = readline("");
echo preg_match("/^\d\d/", $string);

$string = readline("");
echo preg_match("/@/", $string);

$string = readline("");
echo preg_match("/^\d\d \d\d \d\d$/", $string);

$string = readline("");

echo preg_match("/\d{2}\/\d{2}\/\d{4}/", $string);

$string = readline("");
echo preg_match("/.+@.+\..{2,3}/", $string);

$string = readline("");php
echo preg_match("/^[0-9a-z-A-Z.-]*@[0-9a-z-A-Z]*\..{2,3}$/", $string);


$string = readline("");
echo preg_match("/^\n\n\n-\n\n\n-\n\n\n$/", $string);
?>

