<?php
/* @var $this TeamController */
/* @var $data Team */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('team_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->team_id), array('view', 'id'=>$data->team_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logo_uri')); ?>:</b>
	<?php echo CHtml::image($data->logo_uri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('club_state')); ?>:</b>
	<?php echo CHtml::encode($data->club_state); ?>
	<br />


</div>