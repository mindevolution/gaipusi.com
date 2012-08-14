<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<link rel="stylesheet" type="text/css" href="css/sub-common.css" />
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
    <?php if (isset($this->breadcrumbs) && count($this->breadcrumbs)): ?>
    
   <div id="content" class="clearfix">
       <?php include 'left.php';?>
       <div class="path">
            <ul>
            	<li class="path-l"><span class="red12">你的位置：</span>
                                        <?php
                                        $this->widget('zii.widgets.CBreadcrumbs', array(
                                                'links' => $this->breadcrumbs,
                                                'tagName' => 'span',
                                        ));
                                        ?><!-- breadcrumbs --></li>
                 <li class="path-r"><a href="#" target="_self">返回上级</a></li>
            </ul>
         </div>
       <?php endif ?>
	<?php echo $content; ?>
    <div style="clear:both"></div>
</div>
    
    <?php include 'footer.php'; ?>
</body>
    </html>

