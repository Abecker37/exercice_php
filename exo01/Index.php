<?php 
include("my_strlen.php");

echo my_strlen("Hello"); //5
echo PHP_EOL;
echo my_strlen("Hello\nWorld!\n\0Coucou!");// 21
echo PHP_EOL;
echo my_strlen("Cette string possède 29 char");//30

 ?>