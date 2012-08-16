<?php
/* @var $this ConnectController */
/* @var $model Connect */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('QQ')); ?>:</b>
	<?php echo CHtml::encode($data->QQ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('youbian')); ?>:</b>
	<?php echo CHtml::encode($data->youbian); ?>
	<br />


</div>