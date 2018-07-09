<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

$this->widget('zii.widgets.grid.CGridView', [
    'dataProvider' => $model->search(),
    'filter' => $model,
    'afterAjaxUpdate'=>'js:function(id){return false;}',
    'htmlOptions' => [
        'class' => 'grid-view grid-default',
    ],
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
      ]
    ],
]);

?>