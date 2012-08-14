<?php
/* @var $this CategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'分类',
);

$this->menu=array(
	array('label'=>'创建分类', 'url'=>array('create')),
	array('label'=>'分类管理', 'url'=>array('admin')),
);
?>

<h1>分类</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
