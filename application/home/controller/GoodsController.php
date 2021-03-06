<?php

namespace app\home\controller;

use app\home\model\Attribute;
use app\home\model\Category;
use app\home\model\Goods;
use app\home\model\GoodsPics;
use think\Controller;
use think\Request;

class GoodsController extends Controller{

    /**
     * 商品列表
     * 根据"分类"获得对应的商品列表信息
     * 把“当前选中分类”及内部所有“递归子级分类”对应的全部商品列表信息给获得到
     */
    public function index(Request $request,Category $category)
    {


        //获得选取分类级别
        $level = $category->cat_level;

        //根据级别限定查询条件
        if($level=='0'){
            $cdt = "cat_one_id";
        }elseif($level=='1'){
            $cdt = "cat_two_id";
        }else{
            $cdt = "cat_three_id";
        }
        $goodsinfos = Goods::where("$cdt",$category->cat_id)->select();
        $this -> assign('goodsinfos',$goodsinfos);
        return $this -> fetch();
    }

    /**
     * 商品详情
     * 根据商品goods_id获得相关信息展示
     */
    public function detail(Request $request,Goods $goods)
    {
        //① 传递商品依赖注入对象到模板中
        $this -> assign('goods',$goods);

        //② 获得当前被查看商品的"相册"图片信息
        $picsinfos = GoodsPics::where('goods_id',$goods->goods_id)->select();
        $this -> assign('picsinfos',$picsinfos);

        //③ (唯一/单选)属性信息整合
        //获得当前商品"类型"对应的"属性"信息情况
        $attrinfos = Attribute::where('type_id',$goods->type_id)->select();





        //获得当前商品拥有“属性值”的信息
        $attrvals = unserialize($goods -> goods_attrs);


        //把属性信息 与 属性值 融合到一起
        foreach($attrinfos as $k => $v){
            //$k:从0开始自增的序号信息
            foreach($attrvals as $kk => $vv){
                //$kk:属性的attr_id信息
                //让属性 和 属性值 先对应上
                if($v->attr_id == $kk){
                    $attrinfos[$k]['values'] = $vv;
                }
            }
        }
//        dump($attrinfos);
//exit;
        //把融合好的信息传递给模板
        $this -> assign('attrinfos',$attrinfos);

        return $this -> fetch();
    }


}


















