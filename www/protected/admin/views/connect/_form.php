<?php
/* @var $this ConnectController */
/* @var $model Connect */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'connect-form',
	'enableAjaxValidation'=>false,
)); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'QQ'); ?>
		<?php echo $form->textField($model,'QQ',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'QQ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'youbian'); ?>
		<?php echo $form->textField($model,'youbian'); ?>
		<?php echo $form->error($model,'youbian'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '保存' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->