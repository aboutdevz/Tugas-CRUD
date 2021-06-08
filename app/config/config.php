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


$handle = file_get_contents('http://localhost/CRUD/config.json');
$dbconfig = json_decode($handle);
define('DB_HOST',$dbconfig->host);
define('DB_USER',$dbconfig->username);
define('DB_PASS',$dbconfig->password);
define('DB_NAME',$dbconfig->db);