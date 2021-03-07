<?php
$hc_ip = $_SERVER['HTTP_CLIENT_IP'];
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$browser = getenv('HTTP_USER_AGENT');
$referans = $_SERVER['HTTP_REFERER'];
$protocol = $_SERVER['SERVER_PROTOCOL'];
$http_accept = $_SERVER['HTTP_ACCEPT'];
$tarih = date('d.m.Y H:i:s');

$kayit = fopen("iplog.txt", "a");
fputs($kayit, "IP: $hc_ip - IP: $ip - PORT: $port - BROWSER: $browser - REFERANS: $referans - PROTOCOL: $protocol - HTTP_ACCEPT: $http_accept - TARIH: $tarih \n");
fclose($kayit);

?>
