<?php
/* @var $this TeacherController */
/* @var $model Teacher */

$this->breadcrumbs=array(
	'外教'=>array('index'),
	'信息管理',
);

$this->menu=array(
	array('label'=>'信息列表', 'url'=>array('index')),
	array('label'=>'创建信息', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('teacher-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>信息管理</h1>


<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'teacher-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'sex',
		'nationality',
		'city',
		'qualification',
		/*
		'achive',
		'experience',
		'pic',
		'lang',
		*/
		array(
			'class'=>'CButtonColumn',
			'header'=>'操作',
		),
	),
)); ?>
