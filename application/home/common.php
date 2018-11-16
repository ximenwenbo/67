<?php
/**
 * Created by PhpStorm.
 * User: ssh
 * Date: 2018/7/23
 * Time: 17:03
 */

//获得1级别分类信息
function get_catinfo_one(){
    return \app\home\model\Category::where('cat_level','0')->select();
}
//获得2级别分类信息
function get_catinfo_two(){
    return \app\home\model\Category::where('cat_level','1')->select();
}
//获得3级别分类信息
function get_catinfo_three(){
    return \app\home\model\Category::where('cat_level','2')->select();
}





