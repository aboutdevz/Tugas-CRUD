<?php
$protcheck = "off";
$prot;
if ($protcheck == "on"){
    $prot = 'https://';
}else{
    $prot = 'http://';
}
$host = $_SERVER['HTTP_HOST'];
$path = $prot.$host.'/CRUD/public/';

// base url
define('BASEURL',$path);
//define('BASEURL',$_SERVER['HTTP_REFERER'].''.'dugam%20scout/public/');
//db

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','crud');