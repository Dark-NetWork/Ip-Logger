<?php
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$tarih = date('d.m.Y H:i:s');
$browser = getenv('HTTP_USER_AGENT');
$referans = $_SERVER['HTTP_REFERER'];

$kayit = fopen("iplog.txt", "a");
fputs($kayit, "IP: $ip - PORT: $port - BROWSER: $browser - REFERANS: $referans - TARIH: $tarih \n");
fclose($kayit);

?>

