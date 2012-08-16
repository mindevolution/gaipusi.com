<?php
/* @var $this ConnectController */
/* @var $model Connect */

$this->breadcrumbs=array(
	'Connects'=>array('index'),
	'Manage',
);
$this->menu=array(
	
	array('label'=>'添加', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('connect-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>联系我们</h1>


<?php echo CHtml::link('高级搜索 ','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'connect-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'phone',
		'email',
		'address',
		'QQ',
		'youbian',
		array(
			'class'=>'CButtonColumn',
                        'header'=>'操作',
		),
	),
)); ?>
