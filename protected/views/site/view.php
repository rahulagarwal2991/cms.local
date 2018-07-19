<?php
/* @var $this TeamController */
/* @var $model Team */

$this->breadcrumbs=array(
	'Teams'=>array('index'),
	$model->name,
);


?>

<h1>View Team #<?php echo $model->team_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'team_id',
		'name',
	array(
        'label' => 'logo_uri',
        'type'=>'raw',
        'value'=>(!empty($model->logo_uri))?CHtml::image($model->logo_uri,"",array("style"=>"width:100px;height:50px;")):"no image"),
		'club_state',
	),
)); ?>
