<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->breadcrumbs=array(
	'分类'=>array('index'),
	'创建分类',
);

$this->menu=array(
	array('label'=>'分类列表', 'url'=>array('index')),
	array('label'=>'分类管理', 'url'=>array('admin')),
);
?>

<h1>创建分类</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>