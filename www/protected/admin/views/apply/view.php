<?php
/* @var $this ApplyController */
/* @var $model Apply */

$this->breadcrumbs=array(
	'Applies'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'留言管理', 'url'=>array('admin')),
);
?>

<h1>查看</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'gender',
		'Phone',
		'email',
		'address',
		'age',
		'class',
		'level',
		'school',
	),
)); ?>
