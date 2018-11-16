<?php
$fp = fopen('02.txt','a');  //追加形式打开一个文件 没有会自动创建

fwrite($fp,'php68');
fclose($fp);
echo "此用户名已被占用";