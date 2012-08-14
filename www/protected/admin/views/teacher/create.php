<?php
/* @var $this TeacherController */
/* @var $model Teacher */

$this->breadcrumbs=array(
	'外教'=>array('index'),
	'创建信息',
);

$this->menu=array(
	array('label'=>'信息列表', 'url'=>array('index')),
	array('label'=>'信息管理', 'url'=>array('admin')),
);
?>

<h1>创建信息</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>