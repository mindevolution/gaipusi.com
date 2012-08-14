<?php
/* @var $this TeacherController */
/* @var $model Teacher */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'teacher-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    
    <div class="row">
		<?php echo $form->labelEx($model,'lang'); ?>
		<?php echo $form->dropDownList($model,'lang',array('zh_cn'=>'chinese','en_us'=>'English'),array(
                    'options'=>array(
                        'empty' => array('selected'=>true),
                    )
                )); ?>
		<?php echo $form->error($model,'lang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php $sex_radiobuttonList=CHtml::activeRadioButtonList($model,'sex',
					array('female'=>'female','male'=>'male'),
					array('template'=>'{input}{label}','separator'=>" "));
				 $sex_radiobuttonList= str_replace("<label", "<span", $sex_radiobuttonList);
                 $sex_radiobuttonList= str_replace("</label", "</span", $sex_radiobuttonList);
                 echo $sex_radiobuttonList;  ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>
    
    <div class="row">
		<?php echo $form->labelEx($model,'pic'); ?>
		<?php echo CHtml::activeFileField($model,'pic',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pic'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'nationality'); ?>
		<?php echo $form->textField($model,'nationality',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'nationality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qualification'); ?>
		<?php echo $form->textField($model,'qualification',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'qualification'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'achive'); ?>
		<?php echo $form->textArea($model,'achive',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'achive'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'experience'); ?>
		<?php echo $form->textArea($model,'experience',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'experience'); ?>
	</div>
    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->