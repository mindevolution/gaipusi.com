<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<link rel="stylesheet" type="text/css" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="css/index.css" />
<script src="js/jquery-1.7.2.js" type="text/javascript" charset="utf-8"></script>
<script src="js/nav.js" type="text/javascript" charset="utf-8"></script>
<!--[if lte IE 6]>
	<link rel="stylesheet" type="text/css" href="css/ie6.css"/>
    <script type="text/javascript" src="js/PNG.js"></script>
    <script>
        PNG.fix('.png');
    </script>
<![endif]-->
</head>
<body>
    <?php include 'header.php'; ?>
   <div id="content" class="clearfix">
	<div class="subnav">
    	<h3>公司业务</h3>
        <ul class="subnav-ul">
        	<li class="yinghui"><a href="" target="_blank"></a></li>
            <li class="peixun"><a href="" target="_blank"></a></li>
            <li class="zhaopin"><a href="" target="_blank"></a></li>
            <li class="youxue"><a href="" target="_blank"></a></li>
        </ul>
        <ul class="lang-ul">
            
        	<li><?php echo CHtml::link('中文',array('','lang'=>'zh_cn'));?></li>
            <li><?php echo CHtml::link('English',array('','lang'=>'en_us'));?></li>
        </ul>
    </div>
    <div class="video">
    	<div class="pic"><img src="img/pic.jpg" width="418" height="234" /></div>
        <!--<div class="video-play"><img src="img/video.jpg" width="418" height="263" /></div>-->
        <ul>
        	<li><a href="" target="_self" class="png">异象和使命</a></li>
            <li><a href="" target="_self" class="png">公司业务</a></li>
            <li class="last"><a href="" target="_self" class="png">未来规划</a></li>
        </ul>
    </div>
    <div class="contact">
        <img class="kouhao png" src="img/kouhao-r.png" width="294" height="247" alt="" />
        <dl>
        	<dt>咨询热线</dt>
            <dd>010-67996448</dd>
            <dd>010-81671861</dd>
        </dl>
        <div class="zixun"><a href="" target="_blank">在线咨询</a></div>
    </div>
    <div style="clear:both"></div>
</div>
    <?php include 'footer.php'; ?>
</body>
</html>
