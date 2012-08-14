<?php
/* @var $this TeacherController */
/* @var $model Teacher */

$this->breadcrumbs=array(
	'外教信息'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'信息列表', 'url'=>array('index')),
	array('label'=>'创建信息', 'url'=>array('create')),
	array('label'=>'修改信息', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除信息', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理信息', 'url'=>array('admin')),
);
?>

<h1>查看信息</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'sex',
		'nationality',
		'city',
		'qualification',
		'achive',
		'experience',
		'pic',
		'lang',
	),
)); ?>
