<?php
/* @var $this ApplyController */
/* @var $model Apply */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'apply-form',
	'enableAjaxValidation'=>false,
)); ?>
	<fieldset>
                	<h2>个人信息<span>("*"为必填项)</span></h2>
                    <ul>
                    	<li>
                            <?php echo $form->labelEx($model,'name'); ?>
                            <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
                            <?php echo $form->error($model,'name'); ?>
                        </li>
                        <li>
                            <?php echo $form->labelEx($model,'gender'); ?>
                            <?php echo $form->textField($model,'gender',array('size'=>10,'maxlength'=>10)); ?>
                            <?php echo $form->error($model,'gender'); ?>
                        </li>
                        <li>
                            <?php echo $form->labelEx($model,'Phone'); ?>
                            <?php echo $form->textField($model,'Phone',array('size'=>20,'maxlength'=>20)); ?>
                            <?php echo $form->error($model,'Phone'); ?>
                        </li>
                        <li>
                            <?php echo $form->labelEx($model,'email'); ?>
                            <?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
                            <?php echo $form->error($model,'email'); ?>
                        </li>
                        <li>
                            <?php echo $form->labelEx($model,'address'); ?>
                            <?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>100)); ?>
                            <?php echo $form->error($model,'address'); ?>
                        </li>
                    </ul>
                </fieldset>

	 <fieldset>
                	<h2>学校信息</h2>
                    <ul>
                    	<li>
                            <?php echo $form->labelEx($model,'age'); ?>
                            <?php echo $form->textField($model,'age'); ?>
                            <?php echo $form->error($model,'age'); ?>
                        </li>
                        <li>
                            <?php echo $form->labelEx($model,'class'); ?>
                            <?php echo $form->textField($model,'class',array('size'=>30,'maxlength'=>30)); ?>
                            <?php echo $form->error($model,'class'); ?>
                        </li>
                        <li class="nofloat">
                        	<?php echo $form->labelEx($model,'level'); ?>
                                <?php echo $form->textField($model,'level',array('rows'=>6, 'cols'=>50)); ?>
                                <?php echo $form->error($model,'level'); ?>
                        </li>
                        <li class="nofloat">
                        	<?php echo $form->labelEx($model,'school'); ?>
                                <?php echo $form->textField($model,'school',array('size'=>30,'maxlength'=>30)); ?>
                                <?php echo $form->error($model,'school'); ?>
                        </li>
                    </ul>
                </fieldset>

	 <fieldset class="yanzhengma">
                	<h2>验证码<span>("*"为必填项)</span></h2>
                    <ul>
                    	<li>
                            <?php if(CCaptcha::checkRequirements()): ?>
                            <?php echo $form->labelEx($model,'verifyCode'); ?> 
                            <?php $this->widget('CCaptcha'); ?>
                            <?php echo $form->textField($model,'verifyCode'); ?>
                            <?php echo $form->error($model,'verifyCode'); ?>
                            <?php endif;?>
                        </li>
                       
                        <li class="checkbox">
                        	<input type="checkbox" id="" />
                            <p>我己阅读并接受服务条款&nbsp;&nbsp;&nbsp;&nbsp;<a href="" target="_blank">查看服务条款</a></p>
                        </li>
                        <li class="submit">
                           <?php echo CHtml::submitButton($model->isNewRecord ? '点击提交' : 'Save'); ?>
                        </li>
                    </ul>
                </fieldset>

<?php $this->endWidget(); ?>

</div><!-- form -->