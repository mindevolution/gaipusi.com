<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->breadcrumbs=array(
	'分类'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'修改分类',
);

$this->menu=array(
	array('label'=>'分类列表', 'url'=>array('index')),
	array('label'=>'创建分类', 'url'=>array('create')),
	array('label'=>'查看分类 ', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'分类管理', 'url'=>array('admin')),
);
?>

<h1>修改分类</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>