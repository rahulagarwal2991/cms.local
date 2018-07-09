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
        'name' => 'team_one',
        'value' => '$data->TeamOne->name',
        'filter' => false,
    ],[
        'name' => 'team_two',
        'value' => '$data->TeamTwo->name',
        'filter' => false,
    ],[
        'name' => 'winner',
        'value' => '$data->TeamMatchWinner->Team->name',
        'filter' => false,
    ]
    ],
]); ?>
