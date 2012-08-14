<?php
/* @var $this CategoryController */
/* @var $model Category */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'category-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    
      <div class="row">
		<?php echo $form->labelEx($model,'lang'); ?>
		<?php echo $form->dropDownList($model,'lang',array('zh_cn'=>'中文','en_us'=>'English'),array(
                    'options'=>array(
                        'empty' => array('selected'=>true),
                    )
                )); ?>
		<?php echo $form->error($model,'lang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_id'); ?>
		<?php echo $form->dropDownList($model,'parent_id',Category::model()->getList(), array(
                    'empty'=>'- Select location -',
                    'options'=>array(
                        'empty' => array('selected'=>true),
                    )
                )); ?>
		<?php echo $form->error($model,'parent_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'guid'); ?>
		<?php echo $form->textField($model,'guid'); ?>
		<?php echo $form->error($model,'guid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'list_layout'); ?>
		<?php echo $form->textField($model,'list_layout',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'list_layout'); ?>
	</div>

<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->