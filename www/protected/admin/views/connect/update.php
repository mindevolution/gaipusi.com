<?php
/* @var $this ConnectController */
/* @var $model Connect */

$this->breadcrumbs=array(
	'Connects'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'查看', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>修改</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>