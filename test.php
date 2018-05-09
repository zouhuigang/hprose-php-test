<?php
require_once "vendor/autoload.php";

$client = new \Hprose\Socket\Client('tcp://127.0.0.1:3336', false);
$arr=array();
$arr["id"]="100";
$arr["notify_url"]='http://www.hehuomaiche.com/test/notify_fail';
$arr["param"]="362202199201016172";
$arr["topic"]="notify";
$arr["delay"]=10;// 延迟时间, unix时间戳
$users = $client->push(json_encode($arr));
var_dump($users);
