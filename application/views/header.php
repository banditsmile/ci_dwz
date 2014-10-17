<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>标题</title>

	<link href="<?php echo base_url('public/dwz/themes/default/style.css');?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('public/dwz/themes/css/core.css');?>" rel="stylesheet" type="text/css" />
	<!--[if IE]>
	<link href="<?php echo base_url('public/dwz/themes/css/ieHack.css');?>" rel="stylesheet" type="text/css" />
	<![endif]-->

	<script src="<?php echo base_url('public/dwz/js/speedup.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('public/dwz/js/jquery-1.7.2.min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('public/dwz/js/jquery.cookie.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('public/dwz/js/jquery.validate.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('public/dwz/js/jquery.bgiframe.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('public/xheditor/xheditor-1.2.1.min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('public/xheditor/xheditor_lang/zh-cn.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('public/dwz/js/dwz.min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('public/dwz/js/dwz.regional.zh.js');?>" type="text/javascript"></script>

	<script type="text/javascript">
		function fleshVerify(){
			//重载验证码
			$('#verifyImg').attr("src", "<?php echo base_url('application/Public/verify/');?>"+(new Date().getTime()));
		}
		function dialogAjaxMenu(json){
			dialogAjaxDone(json);
			if (json.statusCode == DWZ.statusCode.ok){
				$("#sidebar").loadUrl("<?php echo base_url('application/Public/menu');?>");
			}
		}
		function navTabAjaxMenu(json){
			navTabAjaxDone(json);
			if (json.statusCode == DWZ.statusCode.ok){
				$("#sidebar").loadUrl("<?php echo base_url('application/Public/menu');?>");
			}
		}
		$(function(){
			DWZ.init("<?php echo base_url('public/dwz/dwz.frag.xml');?>", {
				loginUrl:"<?php echo base_url('application/Public/login_dialog');?>", loginTitle:"登录",	// 弹出登录对话框
//		loginUrl:"__APP__/Public/login",	//跳到登录页面
				statusCode:{ok:1,error:0},
				keys:{statusCode:"status", message:"info"},
				pageInfo:{pageNum:"pageNum", numPerPage:"numPerPage", orderField:"_order", orderDirection:"_sort"}, //【可选】
				debug:false,	// 调试模式 【true|false】
				callback:function(){
					initEnv();
					$("#themeList").theme({themeBase:"<?php echo base_url('public/dwz/themes');?>"});
				}
			});
		});
	</script>
</head>
<body scroll="no">
<div id="layout">
	<div id="header">
		<div class="headerNav">
			<a class="logo" href="<?php echo base_url('application/');?>">Logo</a>
			<ul class="nav">
				<li><a href="<?php echo base_url('application/Public/main');?>" target="dialog" width="580" height="360" rel="sysInfo">系统消息</a></li>
				<li><a href="<?php echo base_url('application/Public/password');?>" target="dialog" mask="true">修改密码</a></li>
				<li><a href="<?php echo base_url('application/Public/profile');?>" target="dialog" mask="true">修改资料</a></li>
				<li><a href="<?php echo base_url('application/Public/logout');?>">退出</a></li>
			</ul>
			<ul class="themeList" id="themeList">
				<li theme="default"><div class="selected">蓝色</div></li>
				<li theme="green"><div>绿色</div></li>
				<li theme="purple"><div>紫色</div></li>
				<li theme="silver"><div>银色</div></li>
				<li theme="azure"><div>天蓝</div></li>
			</ul>
		</div>
	</div>
	<div id="leftside">
		<div id="sidebar_s">
			<div class="collapse">
				<div class="toggleCollapse"><div></div></div>
			</div>
		</div>
		<div id="sidebar">
			<div class="toggleCollapse"><h2>主菜单</h2><div>收缩</div></div>
			<div class="accordion" fillSpace="sideBar">
				<div class="accordionHeader">
					<h2><span>Folder</span>应用</h2>
				</div>
				<div class="accordionContent">
					<ul class="tree treeFolder">
						<volist id="item" name="menu" >
							<neq name="item['name']|strtolower" value="public" >
								<neq name="item['name']|strtolower" value="index" >
									<eq name="item['access']" value="1">
										<li><a href="__APP__/{$item['name']}/index/" target="navTab" rel="{$item['name']}">{$item['title']}</a></li>
									</eq>
								</neq>
							</neq>
						</volist>

					</ul>

				</div>
			</div>
		</div>
	</div>