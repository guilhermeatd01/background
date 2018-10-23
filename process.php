<?php
ini_set('display_errors', 1);
ignore_user_abort(1);
set_time_limit(0);

$fp = fopen("bloco1.txt", "a");
$file = fopen('teste.csv', 'r');
while (($line = fgetcsv($file)) !== FALSE)
{
  sleep(10);
  //$line is an array of the csv elements
  $escreve = fwrite($fp, $line[0]);
}
fclose($file);
fclose($fp);
?>