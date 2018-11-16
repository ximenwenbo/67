<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:62:"F:\www\php68\public/../application/admin\view\order\index.html";i:1534926229;s:49:"F:\www\php68\application\admin\view\pub\head.html";i:1532091344;s:55:"F:\www\php68\application\admin\view\order\js_index.html";i:1534925749;s:49:"F:\www\php68\application\admin\view\pub\foot.html";i:1532090900;}*/ ?>
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

<title>订单管理</title>

<style type="text/css">
	/*分页样式*/
	.pagination li{list-style:none;float:left;margin-left:10px;
		padding:0 10px;
		background-color:#5a98de;
		border:1px solid #ccc;
		height:26px;
		line-height:26px;
		cursor:pointer;
		color:#fff;
	}
	.pagination li a{color:white;}
	.pagination li.active{background-color:white;color:gray;}
	.pagination li.disabled{background-color:white;color:gray;}
</style>

</head>
<body>

<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 订单中心 <span class="c-gray en">&gt;</span> 订单管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	
	<div class="text-c"> 日期范围：
		<input type="text" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}' })" id="datemin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d' })" id="datemax" class="input-text Wdate" style="width:120px;">
		<input type="text" class="input-text" style="width:250px" placeholder="输入会员名称、电话、邮箱" id="" name="">
		<button type="submit" class="btn btn-success radius" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜订单</button>
	</div>
	
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>

		<a href="javascript:;" onclick="member_add('添加订单','<?php echo url('tianjia'); ?>','','510')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加订单</a>

	</span> <span class="r">共有数据：<strong>88</strong> 条</span> </div>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="30">ID</th>
				<th width="230">订单编号</th>
				<th width="60">会员</th>
				<th width="70">订单总金额</th>
				<th width="40">付款否</th>
				<th width="130">生成时间</th>
				<th width="*">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($orderinfos) || $orderinfos instanceof \think\Collection || $orderinfos instanceof \think\Paginator): $i = 0; $__LIST__ = $orderinfos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			<tr class="text-c">
				<td><input type="checkbox" value="1" name=""></td>
				<td><?php echo $v['order_id']; ?></td>
				<td><span style="cursor: pointer;color:cornflowerblue;"
						  onclick="order_show('查看订单详情','<?php echo url('detail',['order_id'=>$v['order_id']]); ?>')"
						  title="查看详情">
						<?php echo $v['order_number']; ?></span></td>
				<td><?php echo $v['user']['user_name']; ?></td>
				<td><?php echo $v['order_price']; ?></td>
				<td><?php echo !empty($v['order_status'])?'<input class="btn btn-success radius" type="button" value="是" />':'否'; ?></td>
				<td><?php echo $v['create_time']; ?></td>
				<td class="td-manage">
					<a title="编辑" href="javascript:;"
					   onclick="member_edit('编辑','<?php echo url('xiugai',['order_id'=>$v['order_id']]); ?>','4','','510')"
					   class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
					<a title="删除" href="javascript:;" onclick="member_del(this,<?php echo $v['order_id']; ?>)"
					   class="ml-5" style="text-decoration:none">
						<i class="Hui-iconfont">&#xe6e2;</i></a>
				</td>
			</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			<tr><td colspan="100"><?php echo $pagelist; ?></td></tr>
		</tbody>
	</table>
	</div>
</div>

<script type="text/javascript">
    /*商品-查看*/
    function order_show(title,url,w,h){
        layer_show(title,url,w,h);
    }



    /*商品-删除*/
    function member_del(obj,id){
        layer.confirm('确认要删除吗？',function(){
            $.ajax({
                url:'<?php echo url("shanchu"); ?>',
                type: 'POST',
                dataType: 'json',
                data:{goods_id:id},
                success: function(msg){
                    if(msg.status=='success'){
                        //删除页面商品对应的tr
                        $(obj).closest('tr').remove();
                        layer.msg('已删除!',{icon:1,time:1000});  //做1s种的弹框提示
                    }
                }
            });
        });
    }


    /*商品-添加*/
    function member_add(title,url,w,h){
        layer_show(title,url,w,h);
    }

    /*商品-停用*/
    function member_stop(obj,id){
        layer.confirm('确认要停用吗？',function(index){
            $.ajax({
                type: 'POST',
                url: '',
                dataType: 'json',
                success: function(data){
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
                    $(obj).remove();
                    layer.msg('已停用!',{icon: 5,time:1000});
                },
                error:function(data) {
                    console.log(data.msg);
                },
            });
        });
    }

    /*商品-启用*/
    function member_start(obj,id){
        layer.confirm('确认要启用吗？',function(index){
            $.ajax({
                type: 'POST',
                url: '',
                dataType: 'json',
                success: function(data){
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
                    $(obj).remove();
                    layer.msg('已启用!',{icon: 6,time:1000});
                },
                error:function(data) {
                    console.log(data.msg);
                },
            });
        });
    }
    /*商品-编辑*/
    function member_edit(title,url,id,w,h){
        layer_show(title,url,w,h);
    }
    /*密码-修改*/
    function change_password(title,url,id,w,h){
        layer_show(title,url,w,h);
    }

</script>

</body>
</html>


























