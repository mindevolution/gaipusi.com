<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'后台用户'=>array('index'),
	'创建用户',
);

$this->menu=array(
	array('label'=>'用户管理', 'url'=>array('admin')),
);
?>

<h1>创建用户</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>