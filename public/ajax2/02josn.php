<?php

class Person{
    public $name = 'tom';
    public $age = 23;
    public function run(){
        echo 'is running';
    }
}


$per  = new Person();

//生成json信息只考虑属性信息
echo json_encode($per);//{"name":"tom","age":23}

//利用数组生成json信息
$city = ['北京','上海','广州'];  //索引数组 给生成数组格式的json信息
echo json_encode($city),"<br/>"; //["\u5317\u4eac","\u4e0a\u6d77","\u5e7f\u5dde"]

$city = ['a'=>'beijing','b'=>'shanghai','c'=>'guangzhou']; //关联数组 对象json
echo json_encode($city);

$students = [['tom','jim'],['mary','jack']];//索引二位数组 生成json信息
echo json_encode($students),"<br/>";//[["tom","jim"],["mary","jack"]]
$students = [['tom','jim'],'java'=>['mary','jack']];
echo json_encode($students),"<br/>";//{0:["tom","jim"],"java":["mary","jack"]}

$students = [['a'=>'tom','jim'],'java'=>['mary','jack']];
echo json_encode($students),"<br/>";//{"0":{"a":"tom","0":"jim"},"java":["mary","jack"]}
$students = ['a'=>'tom','jim'];
echo json_encode($students),"<br/>";
$students = [ 'php'=>['a'=>'tom','jim'],'java'=>['mary','jack']];
echo json_encode($students),"<br/>";
