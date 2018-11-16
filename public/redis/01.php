<?php
// windows php操作redis
$redis = new Redis();

//链接redis

$redis->connect('192.168.139.214',6379);

//连接密码

$redis->auth('football');

//选取6号数据库
$redis->select(6);

//设置相关key
$redis->set('weather','rain and cloud');
echo "<hr/>";

var_dump($redis->mget(['weather','addr','week']));