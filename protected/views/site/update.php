<?php
/* @var $this TeamController */
/* @var $model Team */

$this->breadcrumbs=array(
	'Teams'=>array('index'),
	$model->name=>array('view','id'=>$model->team_id),
	'Update',
);
?>
<h1>Update Team <?php echo $model->team_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>