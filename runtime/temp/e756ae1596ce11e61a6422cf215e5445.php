<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"F:\www\php68\public/../application/admin\view\permission\tianjia.html";i:1532486039;s:49:"F:\www\php68\application\admin\view\pub\head.html";i:1532091344;s:62:"F:\www\php68\application\admin\view\permission\js_tianjia.html";i:1532486464;s:49:"F:\www\php68\application\admin\view\pub\foot.html";i:1532090900;}*/ ?>
<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="/favicon.ico" >
    <link rel="Shortcut Icon" href="/favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo config('admin_lib'); ?>html5shiv.js"></script>
    <script type="text/javascript" src="<?php echo config('admin_lib'); ?>respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo config('admin_static'); ?>h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo config('admin_static'); ?>h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo config('admin_lib'); ?>Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo config('admin_static'); ?>h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="<?php echo config('admin_static'); ?>h-ui.admin/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="<?php echo config('admin_lib'); ?>DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--/meta 作为公共模版分离出去-->
    <!--_footer 作为公共模版分离出去-->
    <script type="text/javascript" src="<?php echo config('admin_lib'); ?>jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo config('admin_lib'); ?>layer/2.4/layer.js"></script>
    <script type="text/javascript" src="<?php echo config('admin_static'); ?>h-ui/js/H-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo config('admin_static'); ?>h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<title>添加权限 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form action="" method="post" class="form form-horizontal" id="form-member-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>权限名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value=""   name="ps_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>父级</label>
			<div class="formControls col-xs-8 col-sm-9">
				<select name="ps_pid">
					<option value="0">请选择</option>
					<?php if(is_array($infos) || $infos instanceof \think\Collection || $infos instanceof \think\Paginator): $i = 0; $__LIST__ = $infos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $v['ps_id']; ?>"><?php echo str_repeat('&nbsp;',$v['ps_level']*4); ?><?php echo $v['ps_name']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">控制器</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value=""   name="ps_c">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">操作方法</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value=""   name="ps_a">
			</div>
		</div>




		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>

<!--请在下方写此页面业务相关的脚本-->


<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">

    //页面加载完毕后，给form表单设置submit提交事件
    $(function(){
        $('#form-member-add').submit(function(evt){
            evt.preventDefault();//阻止浏览器提交动作
            var shuju = $(this).serialize(); //收集form表单信息

            //ajax传递数据到服务器端存储
            $.ajax({
                url:'<?php echo url("tianjia"); ?>',    // /admin/permission/tianjia
                data:shuju,
                dataType:'json',
                type:'post',
                success:function(msg){
                    if(msg.status=='success'){
                        layer.alert('添加权限成功',{icon:6},function(){
                            //下述① 和 ②执行执行顺序要求
                            //① 在"父级"页面把新添加权限刷新出来
                            parent.window.location.href=parent.window.location.href;
                            //② 关闭添加权限的弹框表单页面
                            layer_close();
                        });
                    }else{
                        layer.alert('添加权限失败【'+msg.errorinfo+'】',{icon:5});
                    }
                }
            });
        });
    });
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>