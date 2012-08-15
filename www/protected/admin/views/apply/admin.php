<?php
/* @var $this ApplyController */
/* @var $model Apply */

$this->breadcrumbs=array(
	'报名信息管理',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('apply-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>报名信息管理</h1>



<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'apply-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'gender',
		'Phone',
		'email',
		'address',
		/*
		'age',
		'class',*/
		'level',
		'school',
		
		array(
			'class'=>'CButtonColumn',
			'header'=>'操作',
			'template'=>'{view}{delete}',
		),
	),
	));
	 ?>
