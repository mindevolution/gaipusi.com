<?php
/* @var $this ConnectController */
/* @var $model Connect */

$this->breadcrumbs=array(
	'Connects'=>array('index'),
	'Create',
);

$this->menu=array(
	
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>添加</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>