<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'后台用户'=>array('index'),
	'用户管理',
);

$this->menu=array(
	array('label'=>'创建用户', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('user-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>用户管理</h1>


<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'username',
		'true_name',
		array(
			'class'=>'CButtonColumn',
			'header' => '操作',
			'template'=>'{update}{delete}', 
		),
	),
)); ?>
