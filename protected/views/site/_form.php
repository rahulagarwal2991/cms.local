<?php
/* @var $this TeamController */
/* @var $model Team */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'team-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>64,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'logo_uri'); ?>
		<?php echo $form->textField($model,'logo_uri',array('size'=>60,'maxlength'=>128, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'logo_uri'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'club_state'); ?>
		<?php echo $form->textField($model,'club_state',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'club_state'); ?>
	</div>
    <hr class="mb-4">
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary btn-lg btn-block')); ?>
	</div>

<?php $this->endWidget(); ?>

</div>