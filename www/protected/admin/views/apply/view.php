<?php
/* @var $this ApplyController */
/* @var $model Apply */

$this->breadcrumbs=array(
	'Applies'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Apply', 'url'=>array('index')),
	array('label'=>'Create Apply', 'url'=>array('create')),
	array('label'=>'Update Apply', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Apply', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Apply', 'url'=>array('admin')),
);
?>

<h1>View Apply #<?php echo $model->id; ?></h1>

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
