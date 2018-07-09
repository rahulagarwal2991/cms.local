<h1><?php ?></h1>


<?php

$this->breadcrumbs=array(
    $model->name,
);

$this->widget('zii.widgets.grid.CGridView', [
	'dataProvider'=>$dataProvider,
    'htmlOptions' => ['class' => 'grid-view grid-default'],
    'columns' => [
            [
        'name' => 'image_uri',
        'filter' => false,
        'type'=>'html',
        'value'=>'(!empty($data->image_uri))?CHtml::image($data->image_uri,"",array("style"=>"width:50px;height:50px;")):"no image"',

    ],[
        'name' => 'id',
        'value' => '$data->id',
        'filter' => false,
    ],[
        'name' => 'first_name',
        'value' => '$data->first_name',
        'filter' => false,
    ],[
        'name' => 'last_name',
        'value' => '$data->last_name',
        'filter' => false,
    ],[
        'name' => 'jersy_number',
        'value' => '$data->jersy_number',
        'filter' => false,
    ],[
        'name' => 'Player details',
        'value' => 'CHtml::link("View Player", "/teamplayer/view/".$data->id)',
        'type'=>'html',
        'filter' => false,
    ]
    ],
]); ?>
