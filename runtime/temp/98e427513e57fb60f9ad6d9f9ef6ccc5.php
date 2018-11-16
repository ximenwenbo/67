<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:66:"F:\www\php68\public/../application/admin\view\attribute\index.html";i:1533396904;s:49:"F:\www\php68\application\admin\view\pub\head.html";i:1532091344;s:59:"F:\www\php68\application\admin\view\attribute\js_index.html";i:1533397024;s:49:"F:\www\php68\application\admin\view\pub\foot.html";i:1532090900;}*/ ?>
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

<title>属性管理</title>
</head>
<body>

<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 属性中心 <span class="c-gray en">&gt;</span> 属性管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">

	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
			<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>

		<a href="javascript:;" onclick="member_add('添加属性','<?php echo url('tianjia'); ?>','','510')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加属性</a>

			<span style="color:gray;">按商品类型显示</span>
			<select name="type_id" onchange="show_attribute()">
				<option value="0">-请选择-</option>
				<?php $_result=get_type_info();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				<option value="<?php echo $v['type_id']; ?>"
						<?php if(\think\Request::instance()->param('type_id') == $v['type_id']): ?> selected="selected" <?php endif; ?>
				><?php echo $v['type_name']; ?></option>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</span>

		<span class="r">共有数据：<strong>88</strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-hover table-bg table-sort">
			<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="80">ID</th>
				<th width="100">名称</th>
				<th width="80">类型</th>
				<th width="70">是否可选</th>
				<th width="160">可选值列表</th>
				<th width="130">加入时间</th>
				<th width="100">操作</th>
			</tr>
			</thead>
			<tbody>

			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript">
    //定义一个全局的“缓存属性”信息的变量
    var cache_attr = [];

    //类型 变换调用函数，显示对应的属性信息
    function show_attribute(){
        //获得选取好的类型信息
        var type_id = parseInt($('[name=type_id]').val());

        //判断缓存中是否有要显示的属性信息
        if(typeof cache_attr[type_id]!=='undefined'){
            $('tbody').html(cache_attr[type_id]);
            return false;
        }

        //利用Ajax调用服务器端获得对应的属性信息
        $.ajax({
            url:'<?php echo url("showattribute"); ?>',
            data:{type_id:type_id},
            dataType:'json',
            success:function(msg){
                //console.log(msg);
                //msg数据部分 与 html中的tr、td结合显示给页面
                //<tr class="text-c"><td><input type="checkbox" value="1" name=""></td><td>2</td><td>颜色</td><td>手机</td><td>单选</td><td>白色,黑色,红色</td><td>1970-01-01 08:00:00</td><td class="td-manage"><a title="属性列表" href="/admin/attribute/index/attr_id/2.html" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">属性列表</i></a><a title="编辑" href="javascript:;" onclick="member_edit('编辑','/admin/attribute/xiugai/attr_id/2.html','4','','510')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont"></i></a><a title="删除" href="javascript:;" onclick="member_del(this,2)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont"></i></a></td></tr>

                var htmlcont = ""; //空变量
                $.each(msg,function(i,v){
                    htmlcont += '<tr class="text-c">';
                    htmlcont += '<td><input type="checkbox" value="1" name=""></td>';
                    htmlcont += '<td>'+v.attr_id+'</td>';
                    htmlcont += '<td>'+v.attr_name+'</td>';
                    htmlcont += '<td>'+v.type.type_name+'</td>';
                    htmlcont += '<td>'+(v.attr_sel=='only'?'唯一':'单选')+'</td>';
                    htmlcont += '<td>'+v.attr_vals+'</td>';
                    htmlcont += '<td>'+v.create_time+'</td>';
                    htmlcont += '<td class="td-manage"><a title="编辑" href="javascript:;" onclick="member_edit(\'编辑\',\'/admin/attribute/xiugai/attr_id/2.html\',\'4\',\'\',\'510\')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont"></i></a><a title="删除" href="javascript:;" onclick="member_del(this,2)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont"></i></a></td>';
                    htmlcont += '</tr>';
                });

                //把获得好的属性信息放到缓存变量里边，供下次重复使用
                cache_attr[type_id] = htmlcont;

                //把htmlcont追加给页面显示
                $('tbody').html(htmlcont);
            }
        });
    }

    //页面加载完毕，就自动调用一次show_attribute()函数
    //使得默认选中类型的属性展示出来
    $(function(){
        show_attribute()
    });

    /*编辑*/
    function member_edit(title,url,id,w,h){
        layer_show(title,url,w,h);
    }



    /*删除*/
    function member_del(obj,id){
        layer.confirm('确认要删除吗？',function(){
            $.ajax({
                url:'<?php echo url("shanchu"); ?>',
                type: 'POST',
                dataType: 'json',
                data:{goods_id:id},
                success: function(msg){
                    if(msg.status=='success'){
                        //删除页面角色对应的tr
                        $(obj).closest('tr').remove();
                        layer.msg('已删除!',{icon:1,time:1000});  //做1s种的弹框提示
                    }
                }
            });
        });
    }


    /*添加*/
    function member_add(title,url,w,h){
        layer_show(title,url,w,h);
    }
    /*查看*/
    function member_show(title,url,id,w,h){
        layer_show(title,url,w,h);
    }
    /*停用*/
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

    /*启用*/
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

    /*密码-修改*/
    function change_password(title,url,id,w,h){
        layer_show(title,url,w,h);
    }

</script>

</body>
</html>


























