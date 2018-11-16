<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:64:"F:\www\php68\public/../application/home\view\shop\showgoods.html";i:1539260753;s:49:"F:\www\php68\application\home\view\pub\head2.html";i:1534733892;s:57:"F:\www\php68\application\home\view\shop\js_showgoods.html";i:1539260514;s:49:"F:\www\php68\application\home\view\pub\foot2.html";i:1534732776;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <link rel="stylesheet" type="text/css" href="<?php echo config('home_css'); ?>all.css" />
</head>
<body>
<!--head-->
<div class="top">
    <div class="py-container">
        <div class="shortcut">
            <?php if(!(empty(\think\Request::instance()->session('user_name')) || ((\think\Request::instance()->session('user_name') instanceof \think\Collection || \think\Request::instance()->session('user_name') instanceof \think\Paginator ) && \think\Request::instance()->session('user_name')->isEmpty()))): ?>
            <ul class="fl">
                <li class="f-item">品优购欢迎您: </li>
                <li class="f-item">&nbsp;<?php echo \think\Request::instance()->session('user_name'); ?>
                    <span><a href="<?php echo url('user/logout'); ?>">退出系统</a></span>
                </li>
            </ul>
            <?php else: ?>
            <ul class="fl">
                <li class="f-item">品优购欢迎您！</li>
                <li class="f-item">请
                    <a href="<?php echo url('user/login'); ?>" target="_blank">登录</a>　
                    <span><a href="<?php echo url('user/register'); ?>" target="_blank">免费注册</a></span>
                </li>
            </ul>
            <?php endif; ?>

            <ul class="fr">
                <li class="f-item">我的订单</li>
                <li class="f-item space"></li>
                <li class="f-item">我的品优购</li>
                <li class="f-item space"></li>
                <li class="f-item">品优购会员</li>
                <li class="f-item space"></li>
                <li class="f-item">企业采购</li>
                <li class="f-item space"></li>
                <li class="f-item">关注品优购</li>
                <li class="f-item space"></li>
                <li class="f-item">客户服务</li>
                <li class="f-item space"></li>
                <li class="f-item">网站导航</li>
            </ul>
        </div>
    </div>
</div>
<div class="cart py-container">
    <!--logoArea-->
    <div class="logoArea">
        <div class="fl logo">
            <span class="title">
                <?php if(\think\Request::instance()->action()=='jiesuan'): ?>
                结算页
                <?php elseif(\think\Request::instance()->action()=='showgoods'): ?>
                购物车
                <?php endif; ?>
            </span>
        </div>
        <div class="fr search">
            <form class="sui-form form-inline">
                <div class="input-append">
                    <input type="text" type="text" class="input-error input-xxlarge" placeholder="品优购自营" />
                    <button class="sui-btn btn-xlarge btn-danger" type="button">搜索</button>
                </div>
            </form>
        </div>
    </div>











<script type="text/javascript">



    function hh(obj,uid){

        if(!obj.checked){
            //最下方的总金额
            var zong_price1 = parseInt($('.summoney').html());

            //当前取消选中商品的价格小计
            var price  = parseInt($('#'+uid).html()) ;
            //当前剩余选中商品总价格
            var zong_price2 = zong_price1-price;
            //更新总价格
            $('.summoney').html(zong_price2);


            //最下方的总数量
            var zong_number = parseInt($('#total_number').html());
            //取消选中该商品的数量
            var number1 = parseInt($('#'+uid+'_').val()) ;
            //剩余选中的总数量
            var zong_number2 = zong_number-number1;
            //更新总数量
            $('#total_number').html(zong_number2);


        }
        if(obj.checked){

            //做选中商品实时更新
            //选中该商品的数量
            var number1 = parseInt($('#'+uid+'_').val()) ;
            //最下方的总数量
            var zong_number = parseInt($('#total_number').html());
            //计算选中商品的总数量
            var zong_number2 = number1 + zong_number;
            //更新总数量
            $('#total_number').html(zong_number2);


            //选中商品总价格实时更新
            //获得当前总价格
            var zong_price1 = parseInt($('.summoney').html());
            //获得选中的商品小计价格
           var price  = parseInt($('#'+uid).html()) ;
            //计算最终总价格
            var zong_price2 = price+zong_price1;
            //更新总价格
            $('.summoney').html(zong_price2);


        }



    }




    //购物车删除商品
    function del_goods(obj,uid){
        layer.confirm('确认要删除该商品么',function(index){
            //触发执行Ajax实现调用服务器端删除商品
            $.ajax({
                url:'<?php echo url("del"); ?>',
                data:{uid:uid},
                dataType:'json',
                type:'post',
                success:function(info){
                    //删除商品的页面dom元素
                    $(obj).closest('.cart-list').remove();
                    //更新总数量、总价格
                    $('#total_number').html(info.cnumber);
                    $('.summoney').html('¥'+info.cprice);
                }
            });
            layer.close(index); //清除确认框弹层
        });
    }

    /**@param obj:数量input框的dom对象
     * @param uid :购物车商品标志
     * @returns {boolean}
     */

    function xiugai(obj,uid){
        //num：修改后购买数量
        var num = parseInt($('#'+uid+'_').val());



        var fuhao = $(obj).val();
        if(fuhao == '+'){
                num++;
        }else if(fuhao == '-'){
            num--;
        }


        //修改数量要求不能小于1
        if(num<1){
            layer.msg('商品数量要求大于等于1',{icon:5,time:3000},function(){
                //刷新页面，找回商品原数量
                window.location.href=window.location.href;
            });
            //阻止后续代码执行
            return false;
        }
        //利用Ajax触发请求服务器端，实现购物车商品数量修改
        $.ajax({
            url:'<?php echo url("xiugainum"); ?>',
            data:{uid:uid,num:num},
            dataType:'json',
            type:'post',
            success:function(info){

                //console.log(info);//{cnumber: 6, cprice: 4112.35, cgoods_price_sum: 666.44}
                //更新当前商品的小计价格
                $(obj).parents('div.cart-list').find('span.sum').html(info.cgoods_price_sum);


                //更新全部商品的总数量
//                $('#total_number').html(info.cnumber);


                if( document.getElementById(uid+'-').checked){

                    //获得当前总价格
                   var zong_pri = parseInt($('.summoney').html());
                    //获得当前选中商品单价
                   var danjia = parseInt($('#'+uid+'--').html());

                    //获得当前选中商品数量
                    var number = parseInt($('#'+uid+'_').val()) ;


                   //获得最下方总数量
                   var zong_number = parseInt($('#total_number').html());





                    if(fuhao == '+'){

                        zong_number++;
                       //更新选中商品的总数量
                        $('#total_number').html(zong_number);

                        $('.summoney').html(zong_pri+danjia);
                    }else{
                        zong_number--;
                        //更新选中商品的总数量
                        $('#total_number').html(zong_number);

                        $('.summoney').html(zong_pri-danjia);
                    }


                }


                $('#'+uid+'_').val(num);

            }
        });
    }


</script>


<title>我的购物车</title>
<link rel="stylesheet" type="text/css" href="<?php echo config('home_css'); ?>pages-cart.css" />

<!--All goods-->
<div class="allgoods">
	<h4>全部商品<span>11</span></h4>
	<form action="<?php echo url('shop/jiesuan'); ?>" method="post">

		<div class="cart-main">
			<div class="yui3-g cart-th">
				<div class="yui3-u-1-4"><input type="checkbox" name="" id="" value="" /> 全部</div>
				<div class="yui3-u-1-4">商品</div>
				<div class="yui3-u-1-8">单价（元）</div>
				<div class="yui3-u-1-8">数量</div>
				<div class="yui3-u-1-8">小计（元）</div>
				<div class="yui3-u-1-8">操作</div>
			</div>
			<div class="cart-item-list">
				<div class="cart-shop">
					<input type="checkbox" name="" id="" value="" />
					<span class="shopname self">传智自营</span>
				</div>
				<div class="cart-body">
					<?php if(is_array($cartinfos) || $cartinfos instanceof \think\Collection || $cartinfos instanceof \think\Paginator): $i = 0; $__LIST__ = $cartinfos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
					<div class="cart-list">
						<ul class="goods-list yui3-g">
							<li class="yui3-u-1-24">

								<input type="checkbox" value="<?php echo $v['cgoods_attr_uid']; ?>" id="<?php echo $v['cgoods_attr_uid']; ?>-" name="uid[]"  onchange="hh(this,'<?php echo $v['cgoods_attr_uid']; ?>')" />





							</li>
							<li class="yui3-u-6-24">
								<div class="good-item">
									<div class="item-img"><img src="<?php echo substr($v['cgoods_logo'],1); ?>" /></div>
									<div class="item-msg"><?php echo $v['cgoods_name']; ?></div>
								</div>
							</li>
							<li class="yui3-u-5-24">
								<div class="item-txt">
									<?php if(is_array($v['cgoods_attrs']) || $v['cgoods_attrs'] instanceof \think\Collection || $v['cgoods_attrs'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v['cgoods_attrs'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?>
									【<?php echo $attrinfo[$key]; ?>:<?php echo $vv; ?>】
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</div>
							</li>
							<li class="yui3-u-1-8"><span class="price"  id="<?php echo $v['cgoods_attr_uid']; ?>--" ><?php echo $v['cgoods_price']; ?></span></li>
							<li class="yui3-u-1-8">

								<input type="button" value="-" class="increment mins"  onclick="xiugai(this,'<?php echo $v['cgoods_attr_uid']; ?>')"/>
								<input type="number" value="<?php echo $v['cgoods_number']; ?>" id="<?php echo $v['cgoods_attr_uid']; ?>_"

									  style="width:60px;" class="itxt"  />
								<input type="button" value="+" class="increment plus"  onclick="xiugai(this,'<?php echo $v['cgoods_attr_uid']; ?>')"/>
							</li>
							<li class="yui3-u-1-8">
								<!--<span id="<?php echo $v['cgoods_attr_uid']; ?>" class="sum"><?php echo $v['cgoods_price_sum']; ?></span>-->
								<span id="<?php echo $v['cgoods_attr_uid']; ?>" class="sum"><?php echo $v['cgoods_price_sum']; ?></span>
							</li>
							<li class="yui3-u-1-8">
								<span onclick="del_goods(this,'<?php echo $v['cgoods_attr_uid']; ?>')"
									  style="cursor: pointer;"
									  title="删除商品">删除</span><br />
								<a href="#none">移到我的关注</a>
							</li>
						</ul>
					</div>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>

		<div class="cart-tool">
			<div class="select-all">
				<input type="checkbox" name="" id="" value="" />
				<span>全选</span>
			</div>
			<div class="option">
				<a href="#none">删除选中的商品</a>
				<a href="#none">移到我的关注</a>
				<a href="#none">清除下柜商品</a>
			</div>
			<div class="money-box">
				<div class="chosed">已选择<span id="total_number">0</span>件商品</div>
				<div class="sumprice">
					<span><em>总价（不含运费） ：</em>￥<i class="summoney">0</i></span>
					<span><em>已节省：</em><i>-¥20.00</i></span>
				</div>
				<div class="sumbtn">
					<!--<a class="sum-btn" href="<?php echo url('jiesuan'); ?>">结算</a>-->
					<input type="submit" value="結算" onclick="pan()">
				</div>
			</div>
		</div>
	</form>
	<div class="clearfix"></div>
	<div class="deled">
		<span>已删除商品，您可以重新购买或加关注：</span>
		<div class="cart-list del">
			<ul class="goods-list yui3-g">
				<li class="yui3-u-1-2">
					<div class="good-item">
						<div class="item-msg">Apple Macbook Air 13.3英寸笔记本电脑 银色（Corei5）处理器/8GB内存</div>
					</div>
				</li>
				<li class="yui3-u-1-6"><span class="price">8848.00</span></li>
				<li class="yui3-u-1-6">
					<span class="number">1</span>
				</li>
				<li class="yui3-u-1-8">
					<a href="#none">重新购买</a>
					<a href="#none">移到我的关注</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="liked">
		<ul class="sui-nav nav-tabs">
			<li class="active">
				<a href="#index" data-toggle="tab">猜你喜欢</a>
			</li>
			<li>
				<a href="#profile" data-toggle="tab">特惠换购</a>
			</li>
		</ul>
		<div class="clearfix"></div>
		<div class="tab-content">
			<div id="index" class="tab-pane active">
				<div id="myCarousel" data-ride="carousel" data-interval="4000" class="sui-carousel slide">
					<div class="carousel-inner">
						<div class="active item">
							<ul>
								<li>
									<img src="<?php echo config('home_img'); ?>like1.png" />
									<div class="intro">
										<i>Apple苹果iPhone 6s (A1699)</i>
									</div>
									<div class="money">
										<span>$29.00</span>
									</div>
									<div class="incar">
										<a href="#" class="sui-btn btn-bordered btn-xlarge btn-default"><i class="car"></i><span class="cartxt">加入购物车</span></a>
									</div>
								</li>
								<li>
									<img src="<?php echo config('home_img'); ?>like2.png" />
									<div class="intro">
										<i>Apple苹果iPhone 6s (A1699)</i>
									</div>
									<div class="money">
										<span>$29.00</span>
									</div>
									<div class="incar">
										<a href="#" class="sui-btn btn-bordered btn-xlarge btn-default"><i class="car"></i><span class="cartxt">加入购物车</span></a>
									</div>
								</li>
								<li>
									<img src="<?php echo config('home_img'); ?>like3.png" />
									<div class="intro">
										<i>Apple苹果iPhone 6s (A1699)</i>
									</div>
									<div class="money">
										<span>$29.00</span>
									</div>
									<div class="incar">
										<a href="#" class="sui-btn btn-bordered btn-xlarge btn-default"><i class="car"></i><span class="cartxt">加入购物车</span></a>
									</div>
								</li>
								<li>
									<img src="<?php echo config('home_img'); ?>like4.png" />
									<div class="intro">
										<i>Apple苹果iPhone 6s (A1699)</i>
									</div>
									<div class="money">
										<span>$29.00</span>
									</div>
									<div class="incar">
										<a href="#" class="sui-btn btn-bordered btn-xlarge btn-default"><i class="car"></i><span class="cartxt">加入购物车</span></a>
									</div>
								</li>
							</ul>
						</div>
						<div class="item">
							<ul>
								<li>
									<img src="<?php echo config('home_img'); ?>like1.png" />
									<div class="intro">
										<i>Apple苹果iPhone 6s (A1699)</i>
									</div>
									<div class="money">
										<span>$29.00</span>
									</div>
									<div class="incar">
										<a href="#" class="sui-btn btn-bordered btn-xlarge btn-default"><i class="car"></i><span class="cartxt">加入购物车</span></a>
									</div>
								</li>
								<li>
									<img src="<?php echo config('home_img'); ?>like2.png" />
									<div class="intro">
										<i>Apple苹果iPhone 6s (A1699)</i>
									</div>
									<div class="money">
										<span>$29.00</span>
									</div>
									<div class="incar">
										<a href="#" class="sui-btn btn-bordered btn-xlarge btn-default"><i class="car"></i><span class="cartxt">加入购物车</span></a>
									</div>
								</li>
								<li>
									<img src="<?php echo config('home_img'); ?>like3.png" />
									<div class="intro">
										<i>Apple苹果iPhone 6s (A1699)</i>
									</div>
									<div class="money">
										<span>$29.00</span>
									</div>
									<div class="incar">
										<a href="#" class="sui-btn btn-bordered btn-xlarge btn-default"><i class="car"></i><span class="cartxt">加入购物车</span></a>
									</div>
								</li>
								<li>
									<img src="<?php echo config('home_img'); ?>like4.png" />
									<div class="intro">
										<i>Apple苹果iPhone 6s (A1699)</i>
									</div>
									<div class="money">
										<span>$29.00</span>
									</div>
									<div class="incar">
										<a href="#" class="sui-btn btn-bordered btn-xlarge btn-default"><i class="car"></i><span class="cartxt">加入购物车</span></a>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<a href="#myCarousel" data-slide="prev" class="carousel-control left">‹</a>
					<a href="#myCarousel" data-slide="next" class="carousel-control right">›</a>
				</div>
			</div>
			<div id="profile" class="tab-pane">
				<p>特惠选购</p>
			</div>
		</div>
	</div>
</div>
</div>
<!-- 底部栏位 -->
<!--页面底部-->
<div class="clearfix footer">
    <div class="py-container">
        <div class="footlink">
            <div class="Mod-service">
                <ul class="Mod-Service-list">
                    <li class="grid-service-item intro  intro1">

                        <i class="serivce-item fl"></i>
                        <div class="service-text">
                            <h4>正品保障</h4>
                            <p>正品保障，提供发票</p>
                        </div>

                    </li>
                    <li class="grid-service-item  intro intro2">

                        <i class="serivce-item fl"></i>
                        <div class="service-text">
                            <h4>正品保障</h4>
                            <p>正品保障，提供发票</p>
                        </div>

                    </li>
                    <li class="grid-service-item intro  intro3">

                        <i class="serivce-item fl"></i>
                        <div class="service-text">
                            <h4>正品保障</h4>
                            <p>正品保障，提供发票</p>
                        </div>

                    </li>
                    <li class="grid-service-item  intro intro4">

                        <i class="serivce-item fl"></i>
                        <div class="service-text">
                            <h4>正品保障</h4>
                            <p>正品保障，提供发票</p>
                        </div>

                    </li>
                    <li class="grid-service-item intro intro5">

                        <i class="serivce-item fl"></i>
                        <div class="service-text">
                            <h4>正品保障</h4>
                            <p>正品保障，提供发票</p>
                        </div>

                    </li>
                </ul>
            </div>
            <div class="clearfix Mod-list">
                <div class="yui3-g">
                    <div class="yui3-u-1-6">
                        <h4>购物指南</h4>
                        <ul class="unstyled">
                            <li>购物流程</li>
                            <li>会员介绍</li>
                            <li>生活旅行/团购</li>
                            <li>常见问题</li>
                            <li>购物指南</li>
                        </ul>

                    </div>
                    <div class="yui3-u-1-6">
                        <h4>配送方式</h4>
                        <ul class="unstyled">
                            <li>上门自提</li>
                            <li>211限时达</li>
                            <li>配送服务查询</li>
                            <li>配送费收取标准</li>
                            <li>海外配送</li>
                        </ul>
                    </div>
                    <div class="yui3-u-1-6">
                        <h4>支付方式</h4>
                        <ul class="unstyled">
                            <li>货到付款</li>
                            <li>在线支付</li>
                            <li>分期付款</li>
                            <li>邮局汇款</li>
                            <li>公司转账</li>
                        </ul>
                    </div>
                    <div class="yui3-u-1-6">
                        <h4>售后服务</h4>
                        <ul class="unstyled">
                            <li>售后政策</li>
                            <li>价格保护</li>
                            <li>退款说明</li>
                            <li>返修/退换货</li>
                            <li>取消订单</li>
                        </ul>
                    </div>
                    <div class="yui3-u-1-6">
                        <h4>特色服务</h4>
                        <ul class="unstyled">
                            <li>夺宝岛</li>
                            <li>DIY装机</li>
                            <li>延保服务</li>
                            <li>品优购E卡</li>
                            <li>品优购通信</li>
                        </ul>
                    </div>
                    <div class="yui3-u-1-6">
                        <h4>帮助中心</h4>
                        <img src="<?php echo config('home_img'); ?>wx_cz.jpg">
                    </div>
                </div>
            </div>
            <div class="Mod-copyright">
                <ul class="helpLink">
                    <li>关于我们<span class="space"></span></li>
                    <li>联系我们<span class="space"></span></li>
                    <li>关于我们<span class="space"></span></li>
                    <li>商家入驻<span class="space"></span></li>
                    <li>营销中心<span class="space"></span></li>
                    <li>友情链接<span class="space"></span></li>
                    <li>关于我们<span class="space"></span></li>
                    <li>营销中心<span class="space"></span></li>
                    <li>友情链接<span class="space"></span></li>
                    <li>关于我们</li>
                </ul>
                <p>地址：北京市昌平区建材城西路金燕龙办公楼一层 邮编：100096 电话：400-618-4000 传真：010-82935100</p>
                <p>京ICP备08001421号京公网安备110108007702</p>
            </div>
        </div>
    </div>
</div>
<!--页面底部END-->

<!--侧栏面板开始-->
<div class="J-global-toolbar">
	<div class="toolbar-wrap J-wrap">
		<div class="toolbar">
			<div class="toolbar-panels J-panel">

				<!-- 购物车 -->
				<div style="visibility: hidden;" class="J-content toolbar-panel tbar-panel-cart toolbar-animate-out">
					<h3 class="tbar-panel-header J-panel-header">
						<a href="" class="title"><i></i><em class="title">购物车</em></a>
						<span class="close-panel J-close" onclick="cartPanelView.tbar_panel_close('cart');" ></span>
					</h3>
					<div class="tbar-panel-main">
						<div class="tbar-panel-content J-panel-content">
							<div id="J-cart-tips" class="tbar-tipbox hide">
								<div class="tip-inner">
									<span class="tip-text">还没有登录，登录后商品将被保存</span>
									<a href="#none" class="tip-btn J-login">登录</a>
								</div>
							</div>
							<div id="J-cart-render">
								<!-- 列表 -->
								<div id="cart-list" class="tbar-cart-list">
								</div>
							</div>
						</div>
					</div>
					<!-- 小计 -->
					<div id="cart-footer" class="tbar-panel-footer J-panel-footer">
						<div class="tbar-checkout">
							<div class="jtc-number"> <strong class="J-count" id="cart-number">0</strong>件商品 </div>
							<div class="jtc-sum"> 共计：<strong class="J-total" id="cart-sum">¥0</strong> </div>
							<a class="jtc-btn J-btn" href="#none" target="_blank">去购物车结算</a>
						</div>
					</div>
				</div>

				<!-- 我的关注 -->
				<div style="visibility: hidden;" data-name="follow" class="J-content toolbar-panel tbar-panel-follow">
					<h3 class="tbar-panel-header J-panel-header">
						<a href="#" target="_blank" class="title"> <i></i> <em class="title">我的关注</em> </a>
						<span class="close-panel J-close" onclick="cartPanelView.tbar_panel_close('follow');"></span>
					</h3>
					<div class="tbar-panel-main">
						<div class="tbar-panel-content J-panel-content">
							<div class="tbar-tipbox2">
								<div class="tip-inner"> <i class="i-loading"></i> </div>
							</div>
						</div>
					</div>
					<div class="tbar-panel-footer J-panel-footer"></div>
				</div>

				<!-- 我的足迹 -->
				<div style="visibility: hidden;" class="J-content toolbar-panel tbar-panel-history toolbar-animate-in">
					<h3 class="tbar-panel-header J-panel-header">
						<a href="#" target="_blank" class="title"> <i></i> <em class="title">我的足迹</em> </a>
						<span class="close-panel J-close" onclick="cartPanelView.tbar_panel_close('history');"></span>
					</h3>
					<div class="tbar-panel-main">
						<div class="tbar-panel-content J-panel-content">
							<div class="jt-history-wrap">
								<ul>
									<!--<li class="jth-item">
                                        <a href="#" class="img-wrap"> <img src="../../.../portal/img/like_03.png" height="100" width="100" /> </a>
                                        <a class="add-cart-button" href="#" target="_blank">加入购物车</a>
                                        <a href="#" target="_blank" class="price">￥498.00</a>
                                    </li>
                                    <li class="jth-item">
                                        <a href="#" class="img-wrap"> <img src="../../../portal/img/like_02.png" height="100" width="100" /></a>
                                        <a class="add-cart-button" href="#" target="_blank">加入购物车</a>
                                        <a href="#" target="_blank" class="price">￥498.00</a>
                                    </li>-->
								</ul>
								<a href="#" class="history-bottom-more" target="_blank">查看更多足迹商品 &gt;&gt;</a>
							</div>
						</div>
					</div>
					<div class="tbar-panel-footer J-panel-footer"></div>
				</div>

			</div>

			<div class="toolbar-header"></div>

			<!-- 侧栏按钮 -->
			<div class="toolbar-tabs J-tab">
				<div onclick="cartPanelView.tabItemClick('cart')" class="toolbar-tab tbar-tab-cart" data="购物车" tag="cart" >
					<i class="tab-ico"></i>
					<em class="tab-text"></em>
					<span class="tab-sub J-count " id="tab-sub-cart-count">0</span>
				</div>
				<div onclick="cartPanelView.tabItemClick('follow')" class="toolbar-tab tbar-tab-follow" data="我的关注" tag="follow" >
					<i class="tab-ico"></i>
					<em class="tab-text"></em>
					<span class="tab-sub J-count hide">0</span>
				</div>
				<div onclick="cartPanelView.tabItemClick('history')" class="toolbar-tab tbar-tab-history" data="我的足迹" tag="history" >
					<i class="tab-ico"></i>
					<em class="tab-text"></em>
					<span class="tab-sub J-count hide">0</span>
				</div>
			</div>

			<div class="toolbar-footer">
				<div class="toolbar-tab tbar-tab-top" > <a href="#"> <i class="tab-ico  "></i> <em class="footer-tab-text">顶部</em> </a> </div>
				<div class="toolbar-tab tbar-tab-feedback" > <a href="#" target="_blank"> <i class="tab-ico"></i> <em class="footer-tab-text ">反馈</em> </a> </div>
			</div>

			<div class="toolbar-mini"></div>

		</div>

		<div id="J-toolbar-load-hook"></div>

	</div>
</div>
<!--购物车单元格 模板-->
<script type="text/template" id="tbar-cart-item-template">
	<div class="tbar-cart-item" >
		<div class="jtc-item-promo">
			<em class="promo-tag promo-mz">满赠<i class="arrow"></i></em>
			<div class="promo-text">已购满600元，您可领赠品</div>
		</div>
		<div class="jtc-item-goods">
			<span class="p-img"><a href="#" target="_blank"><img src="{2}" alt="{1}" height="50" width="50" /></a></span>
			<div class="p-name">
				<a href="#">{1}</a>
			</div>
			<div class="p-price"><strong>¥{3}</strong>×{4} </div>
			<a href="#none" class="p-del J-del">删除</a>
		</div>
	</div>
</script>
<!--侧栏面板结束-->

<script type="text/javascript" src="<?php echo config('home_js'); ?>all.js"></script>
<script type="text/javascript" src="<?php echo config('admin_lib'); ?>layer/2.4/layer.js"></script>
<script type="text/javascript" src="<?php echo config('home_js'); ?>pages/index.js"></script>
</body>
</html>

