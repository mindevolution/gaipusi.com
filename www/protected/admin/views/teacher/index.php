<?php
/* @var $this TeacherController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'外教信息',
);

$this->menu=array(
	array('label'=>'创建信息', 'url'=>array('create')),
	array('label'=>'信息管理', 'url'=>array('admin')),
);
?>

<h1>外教信息</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
