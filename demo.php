<?php

$redis = new Redis();
$redis->connect('localhost',6379);

$redis->set("key","hello world!");

echo $redis->get("key");


?>