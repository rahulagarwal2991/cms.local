<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#team-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Teams</h1>
<div class="row">
    <div class="table-responsive">

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'team-grid',
    'htmlOptions' => ['class'=>'grid-view grid-default',],
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns' => [
        [
            'name' => 'logo_uri',
            'filter' => false,
            'type'=>'html',
            'value'=>'(!empty($data->logo_uri))?CHtml::image($data->logo_uri,"",array("style"=>"width:25px;height:25px;")):"no image"',
        ],[
            'name' => 'name',
            'value' => '$data->name',
            'filter' => false,
        ],[
            'name' => 'matches',
            'value' => 'CHtml::link($data->TeamPoint->matches, "/TeamMatch/index/".$data->team_id)',
            'type'=>'html',
            'filter' => false,
        ],[
            'name' => 'points',
            'value' => '$data->TeamPoint->point',
            'filter' => false,
        ],[
            'name' => 'rating',
            'value' => '$data->TeamPoint->rating',
            'filter' => false,
        ],[
            'name' => 'Team details',
            'value' => 'CHtml::link("View Team Detail", "/teamplayer/index/".$data->team_id)',
            'type'=>'html',
            'filter' => false,
        ],[
            'class'=>'CButtonColumn',
        ]
    ]
    )); ?>
    </div>
