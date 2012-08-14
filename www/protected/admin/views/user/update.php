<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'后台用户'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'修改用户',
);

$this->menu=array(
	array('label'=>'创建用户', 'url'=>array('create')),
	array('label'=>'用户管理', 'url'=>array('admin')),
);
?>

<h1>修改用户</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>