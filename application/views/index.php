<div id="container">
	<div id="navTab" class="tabsPage">
		<div class="tabsPageHeader">
			<div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
				<ul class="navTab-tab">
					<li tabid="main" class="main"><a href="javascript:void(0)"><span><span class="home_icon">我的主页</span></span></a></li>
				</ul>
			</div>
			<div class="tabsLeft">left</div><!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
			<div class="tabsRight">right</div><!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
			<div class="tabsMore">more</div>
		</div>
		<ul class="tabsMoreList">
			<li><a href="javascript:void(0)">我的主页</a></li>
		</ul>
		<div class="navTab-panel tabsPageContent layoutBox">
			<div class="page unitBox">
				<div class="accountInfo">
					<div class="alertInfo">
						<h2><a target="_blank" href="{$Think.config.bbsurl}/doc/dwz-user-guide.pdf">DWZ框架使用手册(PDF)</a></h2>
						<a href="#" target="_blank">DWZ-thinkphp使用手册</a>
					</div>
					<div class="right">
						<p>{$Think.now}</p>
					</div>
					<p><span>{$Think.config.sitename}</span></p>
					<p>Welcome, {$Think.session.loginUserName}</p>
				</div>
				<div class="pageFormContent" layoutH="80">
					<p>在线演示地址 {$Think.config.demourl}</p>
					<p>DWZ框架使用手册 <a href="<?php echo base_url('/doc/dwz-user-guide.pdf');?>" target="_blank">{$Think.config.demourl}/doc/dwz-user-guide.pdf</a></p>
					<p>Ajax开发视频教材 <a href="<?php echo base_url('/doc/dwz-ajax-develop.swf');?>" target="_blank">{$Think.config.demourl}/doc/dwz-ajax-develop.swf</a></p>
					<p>DWZ框架演示视频 <a href="<?php echo base_url('/doc/dwz-user-guide.swf');?>" target="_blank">{$Think.config.demourl}/doc/dwz-user-guide.swf</a></p>
					<p>Google Code下载 <a href="http://code.google.com/p/dwz/" target="_blank">http://code.google.com/p/dwz/</a></p>

					<div class="divider"></div>
					<h2>dwz_thinkphp版本介绍:</h2>
							<pre style="margin: 5px; line-height: 1.4em;">
							当前版本dwz_thinkphp (DWZ框架v1.4.6 Final + ThinkPHP3.1.3)
							发布dwz_thinkphp主要是为了方便PHP开发者使用DWZ富客户端UI框架。
							其他开发人员也可以结合php后台去理解DWZ和服务器端的交互方式。

							</pre>
					<div class="divider"></div>
					<h2>有偿服务请联系:</h2>
					<p style="color:red">杜权	suport@j-ui.com</p>

				</div>

			</div>
		</div>
	</div>
</div>