<?php
$1p = $_SERVER['HTTP_CLIENT_IP'];
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$browser = getenv('HTTP_USER_AGENT');
$referans = $_SERVER['HTTP_REFERER'];
$protocol = $_SERVER['SERVER_PROTOCOL'];
$tarih = date('d.m.Y H:i:s');


$kayit = fopen("iplog.txt", "a");
fputs($kayit, "İP: $1p - İP: $ip - PORT: $port - BROWSER: $browser - REFERANS: $referans - PROTOCOL: $protocol - TARIH: $tarih \n");
fclose($kayit);

?>
