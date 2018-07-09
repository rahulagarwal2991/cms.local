<?php
/* @var $this TeamPlayerController */
/* @var $model TeamPlayer */

$this->breadcrumbs=array(
    $model->Team->name=>array('teamplayer/index/'.$model->Team->team_id),
    $model->first_name,
);


?>

<h1>View TeamPlayer #<?php echo $model->first_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
    [
            'label' => 'Player',
            'type'=>'raw',
            'value'=>(!empty($model->image_uri))?CHtml::image($model->image_uri,"",array("style"=>"width:100px;height:100px;")):"no image",

    ],
        'first_name',
        'last_name',
        'jersy_number',
        'Team.name',
        'TeamPlayerDetail.matches',
        'TeamPlayerDetail.score',
        'TeamPlayerDetail.highest_score',
        'TeamPlayerDetail.fifties',
        'TeamPlayerDetail.hundreds',

    ),
)); ?>
