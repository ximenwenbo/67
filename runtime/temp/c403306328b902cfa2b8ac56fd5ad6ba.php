<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"F:\www\php68\public/../application/home\view\goods\detail.html";i:1534678517;s:48:"F:\www\php68\application\home\view\pub\head.html";i:1535290836;s:48:"F:\www\php68\application\home\view\pub\foot.html";i:1533952410;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>品优购，优质！优质！</title>
    <link rel="icon" href="/assets/img/favicon.ico">

    <link rel="stylesheet" type="text/css" href="<?php echo config('home_css'); ?>all.css" />

</head>

<body>
<!-- 头部栏位 -->
<!--页面顶部-->
<div id="nav-bottom">
    <!--顶部-->
    <div class="nav-top">
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
                        <li class="f-item"><a href="home.html" target="_blank">我的品优购</a></li>
                        <li class="f-item space"></li>
                        <li class="f-item">品优购会员</li>
                        <li class="f-item space"></li>
                        <li class="f-item">企业采购</li>
                        <li class="f-item space"></li>
                        <li class="f-item">关注品优购</li>
                        <li class="f-item space"></li>
                        <li class="f-item" id="service">
                            <span>客户服务</span>
                            <ul class="service">
                                <li><a href="cooperation.html" target="_blank">合作招商</a></li>
                                <li><a href="shoplogin.html" target="_blank">商家后台</a></li>
                            </ul>
                        </li>
                        <li class="f-item space"></li>
                        <li class="f-item">网站导航</li>
                    </ul>
                </div>
            </div>
        </div>

        <!--头部-->
        <div class="header">
            <div class="py-container">
                <div class="yui3-g Logo">
                    <div class="yui3-u Left logoArea">
                        <a class="logo-bd" title="品优购" href="JD-index.html" target="_blank"></a>
                    </div>
                    <div class="yui3-u Center searchArea">
                        <div class="search">
                            <form action="" class="sui-form form-inline">
                                <!--searchAutoComplete-->
                                <div class="input-append">
                                    <input type="text" id="autocomplete" type="text" class="input-error input-xxlarge" />
                                    <button class="sui-btn btn-xlarge btn-danger" type="button">搜索</button>
                                </div>
                            </form>
                        </div>
                        <div class="hotwords">
                            <ul>
                                <li class="f-item">品优购首发</li>
                                <li class="f-item">亿元优惠</li>
                                <li class="f-item">9.9元团购</li>
                                <li class="f-item">每满99减30</li>
                                <li class="f-item">亿元优惠</li>
                                <li class="f-item">9.9元团购</li>
                                <li class="f-item">办公用品</li>

                            </ul>
                        </div>
                    </div>
                    <div class="yui3-u Right shopArea">
                        <div class="fr shopcar">
                            <div class="show-shopcar" id="shopcar">
                                <span class="car"></span>
                                <a class="sui-btn btn-default btn-xlarge"
                                   href="<?php echo url('shop/showgoods'); ?>"
                                   target="_blank">
                                    <span>我的购物车</span>
                                    <i class="shopnum">0</i>
                                </a>
                                <div class="clearfix shopcarlist" id="shopcarlist" style="display:none">
                                    <p>"啊哦，你的购物车还没有商品哦！"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="yui3-g NavList">
                    <div class="all-sorts-list">
                        <div class="yui3-u Left all-sort">
                            <h4>全部商品分类</h4>
                        </div>
                        <div class="sort">
                            <div class="all-sort-list2">
                                <?php $_result=get_catinfo_one();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                <div class="item">
                                    <h3><a href="<?php echo url('goods/index',['cat_id'=>$v['cat_id']]); ?>"
                                           target="_blank"><?php echo $v['cat_name']; ?></a></h3>
                                    <div class="item-list clearfix">
                                        <div class="subitem">
                                            <?php $_result=get_catinfo_two();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $kk = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($kk % 2 );++$kk;if($vv['cat_pid'] == $v['cat_id']): ?>
                                            <dl class="fore<?php echo $kk; ?>">
                                                <dt><a href="<?php echo url('goods/index',['cat_id'=>$vv['cat_id']]); ?>"
                                                       target="_blank"><?php echo $vv['cat_name']; ?></a></dt>
                                                <dd>
                                                    <?php $_result=get_catinfo_three();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vvv): $mod = ($i % 2 );++$i;if($vvv['cat_pid'] == $vv['cat_id']): ?>
                                                    <em><a href="<?php echo url('goods/index',['cat_id'=>$vvv['cat_id']]); ?>"
                                                           target="_blank"><?php echo $vvv['cat_name']; ?></a></em>
                                                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                                </dd>
                                            </dl>
                                            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="yui3-u Center navArea">
                        <ul class="nav">

                            <li class="f-item">
                                <a href="<?php echo url('/'); ?>">首页</a>
                            </li>
                            <li class="f-item">服装城</li>
                            <li class="f-item">美妆馆</li>
                            <li class="f-item">品优超市</li>
                            <li class="f-item">全球购</li>
                            <li class="f-item">闪购</li>

                            <li class="f-item">有趣</li>
                            <li class="f-item">
                                <a href="<?php echo url('seckill/index'); ?>"  target="_blank" >秒杀</a>
                            </li>
                        </ul>
                    </div>
                    <div class="yui3-u Right"></div>
                </div>

            </div>
        </div>
    </div>
</div>




	<link rel="stylesheet" type="text/css" href="<?php echo config('home_css'); ?>pages-item.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo config('home_css'); ?>pages-zoom.css" />
	<div class="py-container">
		<div id="item">
			<div class="crumb-wrap">
				<ul class="sui-breadcrumb">
					<li>
						<a href="#">手机、数码、通讯</a>
					</li>
					<li>
						<a href="#">手机</a>
					</li>
					<li>
						<a href="#">Apple苹果</a>
					</li>
					<li class="active">iphone 6S系类</li>
				</ul>
			</div>
			<!--product-info-->
			<div class="product-info">
				<div class="fl preview-wrap">
					<!--放大镜效果-->
					<div class="zoom">
						<div id="preview" class="spec-preview">
						<?php if(!(empty($picsinfos) || (($picsinfos instanceof \think\Collection || $picsinfos instanceof \think\Paginator ) && $picsinfos->isEmpty()))): ?>
						<!--默认第一个预览-->
							<span class="jqzoom">
								<img jqimg="<?php echo substr($picsinfos['0']['pics_big'],1); ?>"
									 src="<?php echo substr($picsinfos['0']['pics_mid'],1); ?>" />
							</span>
						</div>
						<!--下方的缩略图-->
						<div class="spec-scroll">
							<a class="prev">&lt;</a>
							<!--左右按钮-->
							<div class="items">
								<ul>
									<?php if(is_array($picsinfos) || $picsinfos instanceof \think\Collection || $picsinfos instanceof \think\Paginator): $i = 0; $__LIST__ = $picsinfos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
									<li><img src="<?php echo substr($v['pics_mid'],1); ?>"
											 bimg="<?php echo substr($v['pics_big'],1); ?>"
											 onmousemove="preview(this)" /></li>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</div>
							<a class="next">&gt;</a>
						</div>
						<?php else: ?>
						<!--默认第一个预览-->
							<span class="jqzoom">
								<img jqimg="<?php echo config('home_img'); ?>_/b1.png" src="<?php echo config('home_img'); ?>_/s1.png" /></span>
						</div>
						<!--下方的缩略图-->
						<div class="spec-scroll">
							<a class="prev">&lt;</a>
							<!--左右按钮-->
							<div class="items">
								<ul>
									<li><img src="<?php echo config('home_img'); ?>_/s1.png" bimg="<?php echo config('home_img'); ?>_/b1.png" onmousemove="preview(this)" /></li>
									<li><img src="<?php echo config('home_img'); ?>_/s2.png" bimg="<?php echo config('home_img'); ?>_/b2.png" onmousemove="preview(this)" /></li>
									<li><img src="<?php echo config('home_img'); ?>_/s3.png" bimg="<?php echo config('home_img'); ?>_/b3.png" onmousemove="preview(this)" /></li>
									<li><img src="<?php echo config('home_img'); ?>_/s1.png" bimg="<?php echo config('home_img'); ?>_/b1.png" onmousemove="preview(this)" /></li>
									<li><img src="<?php echo config('home_img'); ?>_/s2.png" bimg="<?php echo config('home_img'); ?>_/b2.png" onmousemove="preview(this)" /></li>
									<li><img src="<?php echo config('home_img'); ?>_/s3.png" bimg="<?php echo config('home_img'); ?>_/b3.png" onmousemove="preview(this)" /></li>
								</ul>
							</div>
							<a class="next">&gt;</a>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="fr itemInfo-wrap">
					<div class="sku-name">
						<h4><?php echo $goods['goods_name']; ?></h4>
					</div>
					<div class="news"><span>推荐选择下方[移动优惠购],手机套餐齐搞定,不用换号,每月还有花费返</span></div>
					<div class="summary">
						<div class="summary-wrap">
							<div class="fl title">
								<i>价　　格</i>
							</div>
							<div class="fl price">
								<i>¥</i>
								<em><?php echo $goods['goods_price']; ?></em>
								<span>降价通知</span>
							</div>
							<div class="fr remark">
								<i>累计评价</i><em>612188</em>
							</div>
						</div>
						<div class="summary-wrap">
							<div class="fl title">
								<i>促　　销</i>
							</div>
							<div class="fl fix-width">
								<i class="red-bg">加价购</i>
								<em class="t-gray">满999.00另加20.00元，或满1999.00另加30.00元，或满2999.00另加40.00元，即可在购物车换购热销商品</em>
							</div>
						</div>
					</div>
					<div class="support">
						<div class="summary-wrap">
							<div class="fl title">
								<i>支　　持</i>
							</div>
							<div class="fl fix-width">
								<em class="t-gray">以旧换新，闲置手机回收  4G套餐超值抢  礼品购</em>
							</div>
						</div>
						<div class="summary-wrap">
							<div class="fl title">
								<i>配 送 至</i>
							</div>
							<div class="fl fix-width">
								<em class="t-gray">满999.00另加20.00元，或满1999.00另加30.00元，或满2999.00另加40.00元，即可在购物车换购热销商品</em>
							</div>
						</div>
					</div>
					<div class="clearfix choose">
						<form method="post" action="<?php echo url('shop/tianjia'); ?>">
			<input type="hidden" name="goods_id"  value="<?php echo $goods->goods_id; ?>">
			<div id="specification" class="summary-wrap clearfix">
							<?php if(is_array($attrinfos) || $attrinfos instanceof \think\Collection || $attrinfos instanceof \think\Paginator): $i = 0; $__LIST__ = $attrinfos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['attr_sel'] == 'many' && $v['values']['0']!=''): ?>
							<dl>
								<dt>
									<div class="fl title">
									<i><?php echo $v['attr_name']; ?></i>
								</div>
								</dt>
								<dd>
									<?php if(is_array($v['values']) || $v['values'] instanceof \think\Collection || $v['values'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v['values'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?>
									<input type="radio" name="attr_info[<?php echo $v['attr_id']; ?>]"
										   value="<?php echo $vv; ?>"
										   <?php if($key == '0'): ?>checked="checked"<?php endif; ?>
									/><?php echo $vv; endforeach; endif; else: echo "" ;endif; ?>
								</dd>
							</dl>
							<?php endif; endforeach; endif; else: echo "" ;endif; ?>
						</div>

						<div class="summary-wrap">
							<div class="fl title">
								<div class="control-group">
									<div class="controls">
										<input autocomplete="off" type="text" value="1" minnum="1" class="itxt" />
										<a href="javascript:void(0)" class="increment plus">+</a>
										<a href="javascript:void(0)" class="increment mins">-</a>
									</div>
								</div>
							</div>
							<div class="fl">
								<ul class="btn-choose unstyled">
									<li>
										<input type="submit" value="加入购物车" class="sui-btn btn-dangeraddshopcar"/>
									</li>
								</ul>
							</div>
						</div>
			</form>
					</div>
				</div>
			</div>
			<!--product-detail-->
			<div class="clearfix product-detail">
				<div class="fl aside">
					<ul class="sui-nav nav-tabs tab-wraped">
						<li class="active">
							<a href="#index" data-toggle="tab">
								<span>相关分类</span>
							</a>
						</li>
						<li>
							<a href="#profile" data-toggle="tab">
								<span>推荐品牌</span>
							</a>
						</li>
					</ul>
					<div class="tab-content tab-wraped">
						<div id="index" class="tab-pane active">
							<ul class="part-list unstyled">
								<li>手机</li>
								<li>手机壳</li>
								<li>内存卡</li>
								<li>Iphone配件</li>
								<li>贴膜</li>
								<li>手机耳机</li>
								<li>移动电源</li>
								<li>平板电脑</li>
							</ul>
							<ul class="goods-list unstyled">
								<li>
									<div class="list-wrap">
										<div class="p-img">
											<img src="<?php echo config('home_img'); ?>_/part01.png" />
										</div>
										<div class="attr">
											<em>Apple苹果iPhone 6s (A1699)</em>
										</div>
										<div class="price">
											<strong>
											<em>¥</em>
											<i>6088.00</i>
										</strong>
										</div>
										<div class="operate">
											<a href="javascript:void(0);" class="sui-btn btn-bordered">加入购物车</a>
										</div>
									</div>
								</li>
								<li>
									<div class="list-wrap">
										<div class="p-img">
											<img src="<?php echo config('home_img'); ?>_/part02.png" />
										</div>
										<div class="attr">
											<em>Apple苹果iPhone 6s (A1699)</em>
										</div>
										<div class="price">
											<strong>
											<em>¥</em>
											<i>6088.00</i>
										</strong>
										</div>
										<div class="operate">
											<a href="javascript:void(0);" class="sui-btn btn-bordered">加入购物车</a>
										</div>
									</div>
								</li>
								<li>
									<div class="list-wrap">
										<div class="p-img">
											<img src="<?php echo config('home_img'); ?>_/part03.png" />
										</div>
										<div class="attr">
											<em>Apple苹果iPhone 6s (A1699)</em>
										</div>
										<div class="price">
											<strong>
											<em>¥</em>
											<i>6088.00</i>
										</strong>
										</div>
										<div class="operate">
											<a href="javascript:void(0);" class="sui-btn btn-bordered">加入购物车</a>
										</div>
									</div>
									<div class="list-wrap">
										<div class="p-img">
											<img src="<?php echo config('home_img'); ?>_/part02.png" />
										</div>
										<div class="attr">
											<em>Apple苹果iPhone 6s (A1699)</em>
										</div>
										<div class="price">
											<strong>
											<em>¥</em>
											<i>6088.00</i>
										</strong>
										</div>
										<div class="operate">
											<a href="javascript:void(0);" class="sui-btn btn-bordered">加入购物车</a>
										</div>
									</div>
									<div class="list-wrap">
										<div class="p-img">
											<img src="<?php echo config('home_img'); ?>_/part03.png" />
										</div>
										<div class="attr">
											<em>Apple苹果iPhone 6s (A1699)</em>
										</div>
										<div class="price">
											<strong>
											<em>¥</em>
											<i>6088.00</i>
										</strong>
										</div>
										<div class="operate">
											<a href="javascript:void(0);" class="sui-btn btn-bordered">加入购物车</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div id="profile" class="tab-pane">
							<p>推荐品牌</p>
						</div>
					</div>
				</div>
				<div class="fr detail">
					<div class="clearfix fitting">
						<h4 class="kt">选择搭配</h4>
						<div class="good-suits">
							<div class="fl master">
								<div class="list-wrap">
									<div class="p-img">
										<img src="<?php echo config('home_img'); ?>_/l-m01.png" />
									</div>
									<em>￥5299</em>
									<i>+</i>
								</div>
							</div>
							<div class="fl suits">
								<ul class="suit-list">
									<li class="">
										<div id="">
											<img src="<?php echo config('home_img'); ?>_/dp01.png" />
										</div>
										<i>Feless费勒斯VR</i>
										<label data-toggle="checkbox" class="checkbox-pretty">
											<input type="checkbox"><span>39</span>
										</label>
									</li>
									<li class="">
										<div id=""><img src="<?php echo config('home_img'); ?>_/dp02.png" /> </div>
										<i>Feless费勒斯VR</i>
										<label data-toggle="checkbox" class="checkbox-pretty">
											<input type="checkbox"><span>50</span>
										</label>
									</li>
									<li class="">
										<div id=""><img src="<?php echo config('home_img'); ?>_/dp03.png" /></div>
										<i>Feless费勒斯VR</i>
											<label data-toggle="checkbox" class="checkbox-pretty">
											<input type="checkbox"><span>59</span>
										</label>
									</li>
									<li class="">
										<div id=""><img src="<?php echo config('home_img'); ?>_/dp04.png" /></div>
										<i>Feless费勒斯VR</i>
										<label data-toggle="checkbox" class="checkbox-pretty">
											<input type="checkbox"><span>99</span>
										</label>
									</li>
								</ul>
							</div>
							<div class="fr result">
								<div class="num">已选购0件商品</div>
								<div class="price-tit"><strong>套餐价</strong></div>
								<div class="price">￥5299</div>
								<button class="sui-btn  btn-danger addshopcar">加入购物车</button>
							</div>
						</div>
					</div>
					<div class="tab-main intro">
						<ul class="sui-nav nav-tabs tab-wraped">
							<li class="active">
								<a href="#one" data-toggle="tab">
									<span>商品介绍</span>
								</a>
							</li>
							<li>
								<a href="#two" data-toggle="tab">
									<span>规格与包装</span>
								</a>
							</li>
							<li>
								<a href="#three" data-toggle="tab">
									<span>售后保障</span>
								</a>
							</li>
							<li>
								<a href="#four" data-toggle="tab">
									<span>商品评价</span>
								</a>
							</li>
							<li>
								<a href="#five" data-toggle="tab">
									<span>手机社区</span>
								</a>
							</li>
						</ul>
						<div class="clearfix"></div>
						<div class="tab-content tab-wraped">
							<div id="one" class="tab-pane active">
								<ul class="goods-intro unstyled">
									<?php if(is_array($attrinfos) || $attrinfos instanceof \think\Collection || $attrinfos instanceof \think\Paginator): $i = 0; $__LIST__ = $attrinfos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['attr_sel']=='only' && $v['values']['0']!=''): ?>
									<li><?php echo $v['attr_name']; ?>：<?php echo $v['values']['0']; ?></li>
									<?php endif; endforeach; endif; else: echo "" ;endif; ?>
								</ul>
								<div class="intro-detail">
									<?php echo $goods['goods_introduce']; ?>
								</div>
							</div>
							<div id="two" class="tab-pane">
								<p>规格与包装</p>
							</div>
							<div id="three" class="tab-pane">
								<p>售后保障</p>
							</div>
							<div id="four" class="tab-pane">
								<div class="comment">
									<div class="com-tit">商品评价</div>
									<div class="com-percent">
										<p>好评度 <span class="percent">96%</span></p>
									</div>
									<div class="com-tab-type">
										<ul class="type">
											<li class="current"><a href="javascript:;">全部评价(123456)</a></li>
											<li><a href="javascript:;">晒图(500)</a></li>
											<li><a href="javascript:;">追评(500)</a></li>
											<li><a href="javascript:;">好评(500)</a></li>
											<li><a href="javascript:;">中评(500)</a></li>
											<li><a href="javascript:;">差评(500)</a></li>
										</ul>
										<div class="content">
											<div class="com-item">
												<div class="user-column">
													<div class="username"><img src="<?php echo config('home_img'); ?>_/photo.jpg"/>用户****1</div>
													<div class="usernum">品享值258698</div>
												</div>
												<div class="user-info">
													<div class="stars star4"></div>
													<p>手机还不错，可以的可以的</p>
													<div class="guige">
														<ul class="mini">
															<li>玫瑰金</li>
															<li>标配版</li>
															<li>2017-11-02 13:23</li>
														</ul>
														<div class="operate">
															<span id="collect"><i class="sui-icon icon-tb-like"></i> 325</span>
															<span id="comment"><i class="sui-icon icon-tb-wang"></i> 256</span>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
											</div>
											<div class="com-item">
												<div class="user-column">
													<div class="username"><img src="<?php echo config('home_img'); ?>_/photo.jpg"/>用户****1</div>
													<div class="usernum">品享值258698</div>
												</div>
												<div class="user-info">
													<div class="stars star4"></div>
													<p>手机还不错，可以的可以的</p>
													<div class="guige">
														<ul class="mini">
															<li>玫瑰金</li>
															<li>标配版</li>
															<li>2017-11-02 13:23</li>
														</ul>
														<div class="operate">
															<span id="collect"><i class="sui-icon icon-tb-like"></i> 325</span>
															<span id="comment"><i class="sui-icon icon-tb-wang"></i> 256</span>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
											</div>
											<div class="com-item">
												<div class="user-column">
													<div class="username"><img src="<?php echo config('home_img'); ?>_/photo.jpg"/>用户****1</div>
													<div class="usernum">品享值258698</div>
												</div>
												<div class="user-info">
													<div class="stars star4"></div>
													<p>手机还不错，可以的可以的</p>
													<div class="guige">
														<ul class="mini">
															<li>玫瑰金</li>
															<li>标配版</li>
															<li>2017-11-02 13:23</li>
														</ul>
														<div class="operate">
															<span id="collect"><i class="sui-icon icon-tb-like"></i> 325</span>
															<span id="comment"><i class="sui-icon icon-tb-wang"></i> 256</span>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
											</div>
											<div class="com-item">
												<div class="user-column">
													<div class="username"><img src="<?php echo config('home_img'); ?>_/photo.jpg"/>用户****1</div>
													<div class="usernum">品享值258698</div>
												</div>
												<div class="user-info">
													<div class="stars star4"></div>
													<p>手机还不错，可以的可以的</p>
													<div class="guige">
														<ul class="mini">
															<li>玫瑰金</li>
															<li>标配版</li>
															<li>2017-11-02 13:23</li>
														</ul>
														<div class="operate">
															<span id="collect"><i class="sui-icon icon-tb-like"></i> 325</span>
															<span id="comment"><i class="sui-icon icon-tb-wang"></i> 256</span>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
											</div>
											<div class="com-item">
												<div class="user-column">
													<div class="username"><img src="<?php echo config('home_img'); ?>_/photo.jpg"/>用户****1</div>
													<div class="usernum">品享值258698</div>
												</div>
												<div class="user-info">
													<div class="stars star4"></div>
													<p>手机还不错，可以的可以的</p>
													<div class="guige">
														<ul class="mini">
															<li>玫瑰金</li>
															<li>标配版</li>
															<li>2017-11-02 13:23</li>
														</ul>
														<div class="operate">
															<span id="collect"><i class="sui-icon icon-tb-like"></i> 325</span>
															<span id="comment"><i class="sui-icon icon-tb-wang"></i> 256</span>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="five" class="tab-pane">
								<p>手机社区</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--like-->
			<div class="clearfix"></div>
			<div class="like">
				<h4 class="kt">猜你喜欢</h4>
				<div class="like-list">
					<ul class="yui3-g">
						<li class="yui3-u-1-6">
							<div class="list-wrap">
								<div class="p-img">
									<img src="<?php echo config('home_img'); ?>_/itemlike01.png" />
								</div>
								<div class="attr">
									<em>DELL戴尔Ins 15MR-7528SS 15英寸 银色 笔记本</em>
								</div>
								<div class="price">
									<strong>
											<em>¥</em>
											<i>3699.00</i>
										</strong>
								</div>
								<div class="commit">
									<i class="command">已有6人评价</i>
								</div>
							</div>
						</li>
						<li class="yui3-u-1-6">
							<div class="list-wrap">
								<div class="p-img">
									<img src="<?php echo config('home_img'); ?>_/itemlike02.png" />
								</div>
								<div class="attr">
									<em>Apple苹果iPhone 6s/6s Plus 16G 64G 128G</em>
								</div>
								<div class="price">
									<strong>
											<em>¥</em>
											<i>4388.00</i>
										</strong>
								</div>
								<div class="commit">
									<i class="command">已有700人评价</i>
								</div>
							</div>
						</li>
						<li class="yui3-u-1-6">
							<div class="list-wrap">
								<div class="p-img">
									<img src="<?php echo config('home_img'); ?>_/itemlike03.png" />
								</div>
								<div class="attr">
									<em>DELL戴尔Ins 15MR-7528SS 15英寸 银色 笔记本</em>
								</div>
								<div class="price">
									<strong>
											<em>¥</em>
											<i>4088.00</i>
										</strong>
								</div>
								<div class="commit">
									<i class="command">已有700人评价</i>
								</div>
							</div>
						</li>
						<li class="yui3-u-1-6">
							<div class="list-wrap">
								<div class="p-img">
									<img src="<?php echo config('home_img'); ?>_/itemlike04.png" />
								</div>
								<div class="attr">
									<em>DELL戴尔Ins 15MR-7528SS 15英寸 银色 笔记本</em>
								</div>
								<div class="price">
									<strong>
											<em>¥</em>
											<i>4088.00</i>
										</strong>
								</div>
								<div class="commit">
									<i class="command">已有700人评价</i>
								</div>
							</div>
						</li>
						<li class="yui3-u-1-6">
							<div class="list-wrap">
								<div class="p-img">
									<img src="<?php echo config('home_img'); ?>_/itemlike05.png" />
								</div>
								<div class="attr">
									<em>DELL戴尔Ins 15MR-7528SS 15英寸 银色 笔记本</em>
								</div>
								<div class="price">
									<strong>
											<em>¥</em>
											<i>4088.00</i>
										</strong>
								</div>
								<div class="commit">
									<i class="command">已有700人评价</i>
								</div>
							</div>
						</li>
						<li class="yui3-u-1-6">
							<div class="list-wrap">
								<div class="p-img">
									<img src="<?php echo config('home_img'); ?>_/itemlike06.png" />
								</div>
								<div class="attr">
									<em>DELL戴尔Ins 15MR-7528SS 15英寸 银色 笔记本</em>
								</div>
								<div class="price">
									<strong>
											<em>¥</em>
											<i>4088.00</i>
										</strong>
								</div>
								<div class="commit">
									<i class="command">已有700人评价</i>
								</div>
							</div>
						</li>
					</ul>
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


<script type="text/javascript" src="<?php echo config('home_js'); ?>pages/index.js"></script>
<script type="text/javascript" src="<?php echo config('home_js'); ?>pages/item.js"></script>
</body>

</html>