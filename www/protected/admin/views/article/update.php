<?php
/* @var $this ArticleController */
/* @var $model Article */

$this->breadcrumbs=array(
	'文章'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'修改文章',
);

$this->menu=array(
	array('label'=>'文章列表', 'url'=>array('index')),
	array('label'=>'创建文章', 'url'=>array('create')),
	array('label'=>'查看文章', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'文章管理', 'url'=>array('admin')),
);
?>

<h1>修改文章 <?php echo $model->title; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>