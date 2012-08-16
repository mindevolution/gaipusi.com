<?php
/* @var $this ConnectController */
/* @var $model Connect */

$this->breadcrumbs=array(
	'Connects'=>array('index'),
	$model->id,
);

$this->menu=array(
	
	array('label'=>'修改', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>查看</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'phone',
		'email',
		'address',
		'QQ',
		'youbian',
	),
)); ?>
