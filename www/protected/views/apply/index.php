<?php
/* @var $this ApplyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Applies',
);

$this->menu=array(
	array('label'=>'Create Apply', 'url'=>array('create')),
	array('label'=>'Manage Apply', 'url'=>array('admin')),
);
?>

<h1>Applies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
