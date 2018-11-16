<?php
use app\admin\model\Category;



function get_redis_obj($db=9){
    $redis = new \Redis();  //通过“\”公共空间方式使用Redis类
    $redis -> connect('127.0.0.1',6379);
    
    $redis -> select($db);
    return $redis;
}


// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

function send_mail($to,$title,$cont){
    $mailer = \mailer\tp5\Mailer::instance();
    //\vendor\yuan1994\tp-mailer\src\mailer\tp5\Mailer.php
    $mailer->to($to)
        ->subject($title)
        ->html($cont)
        ->send();
}

function get_cat_parent_ids($cat_id){
    $result = []; //用于后期接收所有"上级和本身"的id信息

    //获得$cat_id对应的记录信息
    $category = Category::find($cat_id);
    while($category){
        $result[] = $category->cat_id;

        //继续获得上级分类对象信息
        $category = Category::find($category->cat_pid);
    }
    //把$result的各个元素顺序做反方向调换
    return array_reverse($result);


}

// function get_catinfo_one(){
//     return \app\home\model\Category::where('cat_level','0')->select();
// }
// //获得2级别分类信息
// function get_catinfo_two(){
//     return \app\home\model\Category::where('cat_level','1')->select();
// }
// //获得3级别分类信息
// function get_catinfo_three(){
//     return \app\home\model\Category::where('cat_level','2')->select();
// }

function send_sms($tel,$code,$time)
{
    $config = [
        //控制密钥
        'accessKeyId'    => 'LTAImmHJ561U6sRX',
        //密钥信息
        'accessKeySecret' => 'LaKLCPuNKgL81qbWOUWiZTSozWkRlC',
    ];

    $client  = new \Flc\Dysms\Client($config);
    $sendSms = new \Flc\Dysms\Request\SendSms;//接收短信的手机号
    $sendSms->setPhoneNumbers($tel);
    $sendSms->setSignName('王忠');//设置签名
    $sendSms->setTemplateCode('SMS_142387403');
    //设置模板变量
    $sendSms->setTemplateParam(['code' => $code,'time'=>$time]);
    //设置发送短信序号
    $sendSms->setOutId('demo'.time());
    return $client->execute($sendSms);//发送短信
}


/***
 * 发送邮件
 * @param $to
 * @param $title
 * @param $cpmt
 */





