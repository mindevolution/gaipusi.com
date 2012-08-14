<?php
/* @var $this ApplyController */
/* @var $model Apply */

$this->breadcrumbs=array(
	'Applies'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Apply', 'url'=>array('index')),
	array('label'=>'Create Apply', 'url'=>array('create')),
	array('label'=>'View Apply', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Apply', 'url'=>array('admin')),
);
?>

<h1>Update Apply <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>