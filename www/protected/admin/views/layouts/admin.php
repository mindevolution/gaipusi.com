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
		<div class="top_logo"><img src="images/logo.png"/></div>
			<div class="top_bg">
				<div class="font-1"> 您好，<!--现在时间是： <span id="js_get_cur_time"></span>--> &nbsp;&nbsp;<a target="_blank" href="www.baidu.com">访问首页</a> | <a href="">退出系统</a></div>
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
								<li><a href="admin.php?r=connect/admin">联系我们</a></li>
								<li><a href="#">赞助支持</a></li>
								<li><a href="#">隐私条款</a></li>
								<li><a href="#">网站设置</a></li>
							</ul>
						</li>

						<li class="parent "><a onclick="hidediv('div_menu_admin')" href="javascript:void(0)">后台用户</a>
							<ul id="div_menu_admin" style="display:none;" class="menu_second">

								<li><a href="admin.php?r=user/admin">用户列表</a></li>
								
							</ul>
						</li>

					</ul>
				</div>
			</div> 
			<div class="connect_right">
				<div id="sidebar">
				<?php
					$this->beginWidget('zii.widgets.CPortlet', array(
						'title'=>'Operations',
					));
					$this->widget('zii.widgets.CMenu', array(
						'items'=>$this->menu,
						'htmlOptions'=>array('class'=>'operations'),
					));
					$this->endWidget();
				?>
				</div><!-- sidebar -->
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
