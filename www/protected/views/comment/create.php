<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->breadcrumbs=array(
	'Comments'=>array('index'),
	'Create',
);

?>
<div class="liuyan">
<h1>我要留言</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>