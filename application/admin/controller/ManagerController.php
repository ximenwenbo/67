<?php
namespace app\admin\Controller;


use app\admin\model\Manager;
use app\admin\model\Ss;
use think\Controller;
use think\Request;

use app\admin\model\Category;


class Managercontroller extends Controller{


    public function lon(){
        $conn = mysqli_connect('localhost','root','root');
        mysqli_set_charset($conn,'utf-8');
        mysqli_select_db($conn,'php68');
        $sql = "select * from sp_goods";
        $res  = mysqli_query($conn,$sql);
        
      $rows = mysqli_fetch_all($res,1);
      echo "<pre>";
      mysqli_free_result($res);
      mysqli_close($conn);

            }
    public function login(Request $request){



//
//        $arr = [54,45,2,3,1,98,44]; //45,2,3,1,54,98
//       function bu(&$arr){
//           for($i = 0,$num=count($arr);$i<$num-1;$i++){
//               for($j=0;$j<$num-1-$i;$j++){
//                   if ($arr[$j]>$arr[$j+1]){
//                       $temp = $arr[$j];
//                       $arr[$j] = $arr[$j+1];
//                       $arr[$j+1] = $temp;
//                   }
//               }
//           }
//       }
//       echo "<pre>";
//       bu($arr);
//        dump($arr);
//
//
//        exit;



//        $arr = [23,12,324,5433,233,23456,98];
//
//        function pai($arr){
//            $len =count($arr);
//            for($i = 0;$i<$len-1;$i++){
//                for($j=0;$j<$len-1-$i;$j++){
//                    if($arr[$j]>$arr[$j+1]){
//                        $temp = $arr[$j+1];
//                        $arr[$j+1]=$arr[$j];
//                        $arr[$j]=$temp;
//                    }
//                }
//            }
//            return $arr;
//
//        }
//        echo "<pre>";
//         print_r(pai($arr));
//exit;
//        $arr = [11,22,44,33,2222];  //
//        function aaa(&$arr){
//            $len=count($arr);
//            for($i=0;$i<$len-1;$i++){
//                for($j=0;$j<$len-1-$i;$j++){
//                    if($arr[$j]>$arr[$j+1]){
//
//                        $temp = $arr[$j];
//                        $arr[$j]=$arr[$j+1];
//                        $arr[$j+1]=$temp;
//
//
//                    }
//                }
//            }
//
//        }
//        $aaa = [1,4,3];
//
//        function bu($aaa){
//            $count = count($aaa);
//            for($i=0;$i<$count-1;$i++){
//                for($j=0,$arr=[];$j<$count-1-$i;$j++){
//                    if ($aaa[$j]<$aaa[$j+1]) {
//                        $temp = $j;
//                        echo $temp;
//
//
//                    }
//                }
//
//
//            }
//            //return $arr;
//
//        }
//
//        function getTree($array, $cat_id =0, $level = 0){
//
//            //声明静态数组,避免递归调用时,多次声明导致数组覆盖
//            static $list = [];
//            foreach ($array as $key => $value){
//                //第一次遍历,找到父节点为根节点的节点 也就是pid=0的节点
//                if ($value['cat_pid'] == $cat_id){
//                    //父节点为根节点的节点,级别为0，也就是第一级
//                    $value['level'] = $level;
//                    //把数组放到list中
//                    $list[] = $value;
//                    //把这个节点从数组中移除,减少后续递归消耗
//                    // unset($array[$key]);
//                    //开始递归,查找父ID为该节点ID的节点,级别则为原级别+1
//                    getTree($array, $value['cat_id'], $level+1);
//
//                }
//            }
//            return $list;
//        }
//
//      $arr = Category::select();
//
//
//       dump(getTree($arr));
//        exit;
//        function bubble_sort(&$arr){
//            for($len = count($arr),$i=0;$i<$len;$i++){
//                for($j = 0;$j<$len - $i-1;$j++){
//                    if ($arr[$j]>$arr[$j+1]) {
//                        $temp = $arr[$j+1];
//                        $arr[$j+1] =$arr[$j];
//                        $arr[$j] = $temp;
//
//                    }
//                }
//            }
//        }
//
//        $arr = array(10,2,36,14,10,25);
//        bubble_sort($arr);
//        echo "<pre>";
//        print_r($arr);
//exit;




        if ($request->ispost()){
            //判断验证码
            $code = $request->post('verify_code');
            if (captcha_check($code)) {

                //获得账号信息

                $name = $request->post('mg_name');
                $pwd = md5($request->post('mg_pwd'));

                $exists = Manager::where(['mg_name' => $name, 'mg_pwd' => $pwd])->find();
                if ($exists) {

                    session('mg_id', $exists->mg_id);
                    session('mg_name', $exists->mg_name);
                    //跳转到后台页面
                    $this->redirect('index/index');
                } else {
                    $this->assign('errorinfo', '用户名或密码错误');
                }
            }else{
                $this->assign('errorinfo','验证码错误');
            }
        }

        //没有成功就展示登陆的表单页面;
        return $this -> fetch();
    }

    public function logout(){
        //清楚session
        session(null);
        //跳转到登录页面
        $this->redirect('Manager/login');
    }

    public function index(){

        //获得管理员信息
        $infos = Manager::select();

        $this->assign('infos',$infos);
        return $this->fetch();


    }


}

