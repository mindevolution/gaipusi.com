<?php
/* @var $this ArticleController */
/* @var $model Article */

$this->breadcrumbs=array(
	'文章'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'文章列表', 'url'=>array('index')),
	array('label'=>'创建文章', 'url'=>array('create')),
	array('label'=>'修改文章', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除文章', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'文章管理', 'url'=>array('admin')),
);
?>

<h1>查看文章</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cat_id',
		'title',
		'body',
		'hits',
		'is_show',
		'author',
		'pic',
		'datetime',
		'maincat_id',
	),
)); ?>
