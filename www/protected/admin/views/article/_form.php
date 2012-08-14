<?php
/* @var $this ArticleController */
/* @var $model Article */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'article-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    
    <div class="row">
		<?php echo $form->labelEx($model,'maincat_id'); ?>
		<?php echo $form->dropDownList($model,'maincat_id',Category::model()->getList(), array(
                    'empty'=>'- Select location -',
					 'ajax'=>array(
					 'url'=>Yii::app()->createUrl('article/dynamicArticle'),
					 'data'=>array('parent_id'=>'js:this.value'),
					 'update'=>'#Article_cat_id',
					)
                ));
				?>
		<?php echo $form->error($model,'maincat_id'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'cat_id'); ?>
		<?php echo $form->dropDownList($model,'cat_id',$model->getArtList($model->maincat_id),array(
					'empty'=>'-Select location-',
					 'options'=>array(
                        'empty' => array('selected'=>true),
						)
					)); ?>
		<?php echo $form->error($model,'cat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pic'); ?>
		<?php echo CHtml::activeFileField($model,'pic',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pic'); ?>
	</div>
	
    <div class="row">
    		<?php echo $form->labelEx($model,'body'); ?>
    		<?php
			$this->widget('application.extensions.fckeditor.FCKEditorWidget',array(
			'model'     =>  $model,
			'attribute' => 'body',//属性的名字
			'height'    =>  '500px',//高度
			'width'     =>  '100%',//宽度
			'fckeditor' =>  Yii::app()->basePath.'/../fckeditor/fckeditor.php',
			'fckBasePath' => Yii::app()->baseUrl.'/fckeditor/',
			'config' => array('ToolbarStartExpanded'=>false),//配置，这里设置的是默认不展开工具条
			//'editorTemplate' => 'full'
			)
			); 
			?>
            <?php echo $form->error($model,'body'); ?>
    </div>
 

	<div class="row">
		<?php echo $form->labelEx($model,'is_show'); ?>
		<?php echo $form->textField($model,'is_show'); ?>
		<?php echo $form->error($model,'is_show'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'author'); ?>
		<?php echo $form->textField($model,'author',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'author'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'datetime'); ?>
		<?php echo $form->textField($model,'datetime',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'datetime'); ?>
	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->