<?php
require_once 'vendor/autoload.php';
use MUQEE\MQService\Service;
$obj = new Service();

$msg = $obj->hello();

var_dump($msg);
