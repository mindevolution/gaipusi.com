<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="language" content="zh" />
		<!-- blueprint CSS framework -->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
		<!--[if lt IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
		<![endif]-->

		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/manage.css" />
	</head>

	<body>
		<div id="top">
			<div class="top_logo"></div>
			<div class="top_bg">
				<div class="font-1"><?= $_SESSION["admin_name"] ?> 您好，<!--现在时间是： <span id="js_get_cur_time"></span>--> &nbsp;&nbsp;<a target="_blank" href="../">访问首页</a> | <a href="logout.php">退出系统</a></div>
			</div>
		</div>
		<div style="clear:both;"></div>
		<div id="connect">
			<div class="connect_left">
				<script type="text/javascript">
					function hidediv(Name)
					{				
						if (document.getElementById(Name).style.display==''){
							document.getElementById(Name).style.display='none';	
							document.getElementById(Name).parentNode.className = 'parent';
						}
						else{
							document.getElementById(Name).style.display='';	
							document.getElementById(Name).parentNode.className = '';
						}
					}
				</script>      

        <div class="menu">
					<ul>
						<li><a href="admin.php?r=category/admin">分类管理</a></li>
                        
                        <li><a href="admin.php?r=article/admin">文章管理</a></li>
                        
                        <li><a href="admin.php?r=teacher/admin">外教信息</a></li>
                        
                        <li><a href="admin.php?r=apply/admin">报名信息</a></li>
                        
                        <li><a href="admin.php?r=comment/admin">评论管理</a></li>

						<li class="parent "><a onclick="hidediv('div_menu_mix')" href="javascript:void(0)">综合管理</a>
							<ul id="div_menu_mix" style="display:none;" class="menu_second">

								<li><a href="/manager/pic_links.php">图片链接</a></li>
								<li><a href="/manager/aboutus.php">关于我们</a></li>
								<li><a href="/manager/contactus.php">联系我们</a></li>
								<li><a href="/manager/article_general.php?cat_id=statement">赞助支持</a></li>
								<li><a href="/manager/article_general.php?cat_id=contributions">欢迎投稿</a></li>
								<li><a href="/manager/privacy.php">隐私条款</a></li>
								<li><a href="/manager/data_export.php">文章数据导出</a></li>
								<li><a href="/manager/website_config.php">网站设置</a></li>
								<li><a href="/manager/cache.php">cache</a></li>
							</ul>
						</li>

						<li class="parent "><a onclick="hidediv('div_menu_admin')" href="javascript:void(0)">后台用户</a>
							<ul id="div_menu_admin" style="display:none;" class="menu_second">

								<li><a href="admin.php?r=user/admin">用户列表</a></li>
								
							</ul>
						</li>

					</ul>
				</div>
			</div>    <div class="connect_right">
				<?php if (isset($this->breadcrumbs)): ?>
					<?php
					$this->widget('zii.widgets.CBreadcrumbs', array(
						'links' => $this->breadcrumbs,
					));
					?><!-- breadcrumbs -->
				<?php endif ?>
				<?php echo $content; ?>
				<div class="clearfloat"></div>
			</div>

    </div>
    <div class="clearfloat"></div>

		<div class="container" id="wrap">


			<div class="clear"></div>


		</div><!-- page -->
	</body>
</html>
