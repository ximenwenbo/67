<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:62:"F:\www\php68\public/../application/admin\view\role\xiugai.html";i:1532678673;s:49:"F:\www\php68\application\admin\view\pub\head.html";i:1532091344;s:55:"F:\www\php68\application\admin\view\role\js_xiugai.html";i:1532331680;s:49:"F:\www\php68\application\admin\view\pub\foot.html";i:1532090900;}*/ ?>
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

<title>修改角色 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form action="" method="post" class="form form-horizontal" id="form-member-add">
		<input type="hidden" name="role_id" value="<?php echo $role['role_id']; ?>" />
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>角色名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $role['role_name']; ?>"
					   id="role_name" name="role_name" />
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">访问权限：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<?php if(is_array($ps_infoA) || $ps_infoA instanceof \think\Collection || $ps_infoA instanceof \think\Paginator): $i = 0; $__LIST__ = $ps_infoA;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				<dl class="permission-list">
					<dt><label>
						<input type="checkbox" value="<?php echo $v['ps_id']; ?>" name="quanxian[]"
							   id="user-Character-0"
							   <?php if(in_array(($v['ps_id']), is_array($role['role_ps_ids'])?$role['role_ps_ids']:explode(',',$role['role_ps_ids']))): ?> checked="checked" <?php endif; ?>
						/><?php echo $v['ps_name']; ?></label>
					</dt>
					<dd>
						<?php if(is_array($ps_infoB) || $ps_infoB instanceof \think\Collection || $ps_infoB instanceof \think\Paginator): $i = 0; $__LIST__ = $ps_infoB;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;if($vv['ps_pid'] == $v['ps_id']): ?>
						<dl class="cl permission-list2">
							<dt><label class="">
								<input type="checkbox" value="<?php echo $vv['ps_id']; ?>" name="quanxian[]"
									   id="user-Character-0-0"
									   <?php if(in_array(($vv['ps_id']), is_array($role['role_ps_ids'])?$role['role_ps_ids']:explode(',',$role['role_ps_ids']))): ?> checked="checked" <?php endif; ?>
								/><?php echo $vv['ps_name']; ?></label>
							</dt>
							<dd>
								<?php if(is_array($ps_infoC) || $ps_infoC instanceof \think\Collection || $ps_infoC instanceof \think\Paginator): $i = 0; $__LIST__ = $ps_infoC;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vvv): $mod = ($i % 2 );++$i;if($vvv['ps_pid'] == $vv['ps_id']): ?>
								<label class="">
									<input type="checkbox" value="<?php echo $vvv['ps_id']; ?>" name="quanxian[]"
										   id="user-Character-0-0-0"
										   <?php if(in_array(($vvv['ps_id']), is_array($role['role_ps_ids'])?$role['role_ps_ids']:explode(',',$role['role_ps_ids']))): ?> checked="checked" <?php endif; ?>
									/><?php echo $vvv['ps_name']; ?></label>
								<?php endif; endforeach; endif; else: echo "" ;endif; ?>
							</dd>
						</dl>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</dd>
				</dl>
				<?php endforeach; endif; else: echo "" ;endif; ?>
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
<script type="text/javascript">
    $(function(){
        //给“权限”上下级复选框设置“关联单击”效果
        $(".permission-list dt input:checkbox").click(function(){
            $(this).closest("dl").find("dd input:checkbox").prop("checked",$(this).prop("checked"));
        });
        $(".permission-list2 dd input:checkbox").click(function(){
            var l =$(this).parent().parent().find("input:checked").length;
            var l2=$(this).parents(".permission-list").find(".permission-list2 dd").find("input:checked").length;
            if($(this).prop("checked")){
                $(this).closest("dl").find("dt input:checkbox").prop("checked",true);
                $(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",true);
            }
            else{
                if(l==0){
                    $(this).closest("dl").find("dt input:checkbox").prop("checked",false);
                }
                if(l2==0){
                    $(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",false);
                }
            }
        });
    });


    //页面加载完毕后，给form表单设置submit提交事件
    $(function(){
        $('#form-member-add').submit(function(evt){
            evt.preventDefault();//阻止浏览器提交动作

            //获得表单信息为字符串形式(普通表单 和 复选框表单 都可以处理)
            var shuju = $(this).serialize();

            //ajax传递数据到服务器端存储
            $.ajax({
                url:'<?php echo url("xiugai","",false); ?>',  // /admin/role/xiugai
                data:shuju,
                dataType:'json',
                type:'post',
                success:function(msg){
                    if(msg.status=='success'){
                        layer.alert('修改角色成功',{icon:6},function(){
                            //下述① 和 ②执行执行顺序要求
                            //① 在"父级"页面把新添加角色刷新出来
                            parent.window.location.href=parent.window.location.href;
                            //② 关闭添加角色的弹框表单页面
                            layer_close();
                        });
                    }else{
                        layer.alert('修改角色失败【'+msg.errorinfo+'】',{icon:5});
                    }
                }
            });
        });
    });

</script>
<!--/请在上方写此页面业务相关的脚本-->

</body>
</html>


























