<?php
/* @var $this TeacherController */
/* @var $model Teacher */

$this->breadcrumbs=array(
	'外教'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'修改信息',
);

$this->menu=array(
	array('label'=>'信息列表', 'url'=>array('index')),
	array('label'=>'创建信息', 'url'=>array('create')),
	array('label'=>'产看信息', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'信息管理', 'url'=>array('admin')),
);
?>

<h1>修改信息</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>