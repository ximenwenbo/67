<?php

//制作传统分页效果

//连接数据库/获得数据/制作分页效果
header("content-type:text/html;charset=utf-8");
$m = new Mysqli('localhost','root','root','php68');
$m -> query('set names utf8');

//引入分页工具类
include('./page.php');



//获得记录总条数
$sql = "select * from sp_goods";
$result = $m -> query($sql);
$tot = $m -> affected_rows;  //获得记录总条数
$per = 3;   //每页显示3条数据

//实例化分页类对象
$page_obj = new Page($tot,$per);

//根据limit的条件获得每页显示的数据
//分类对象->limit:会自动帮组把"limit 便宜量,长度" 的信息拼装好
$sql2 = "select * from sp_goods ".$page_obj->limit;
$result2 = $m -> query($sql2);
$infos2 = $result2 -> fetch_all(MYSQLI_ASSOC);

//获得分页列表信息
$pagelist = $page_obj->fpage(array(3,4,5,6,7,8));

//var_dump($result);//Object结果对象
//从结果对象中 获得具体的数据记录信息
//$infos = $result -> fetch_all();  //通过“索引二维数组”格式返回全部结果
//$infos = $result -> fetch_all(MYSQLI_ASSOC);  //通过“关联二维数组”格式返回全部结果

//通过table表格呈现数据
echo <<<eof
    <style type="text/css">
        table{width:700px; margin:auto; border:1px solid black; border-collapse:collapse;}
        td{border:1px solid black;}
    </style>
    <table>
        <tr>
            <td>id</td>
            <td>名称</td>
            <td>价格</td>
            <td>数量</td>
        </tr>
eof;

foreach($infos2 as $v){
    echo "<tr>";
    echo "<td>".$v['goods_id']."</td>";
    echo "<td>".$v['goods_name']."</td>";
    echo "<td>".$v['goods_price']."</td>";
    echo "<td>".$v['goods_number']."</td>";
    echo "</tr>";
}
echo "<tr><td colspan='100'>".$pagelist."</td></tr>";
echo "</table>";
