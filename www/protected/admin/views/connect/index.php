<?php
/* @var $this ConnectController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Connects',
);

$this->menu=array(
	array('label'=>'Create Connect', 'url'=>array('create')),
	array('label'=>'Manage Connect', 'url'=>array('admin')),
);
?>

<h1>Connects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
