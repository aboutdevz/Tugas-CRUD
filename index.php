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

header('Location:'.$path);