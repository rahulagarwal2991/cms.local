<?php
/* @var $this TeamPlayerController */
/* @var $data TeamPlayer */
?>
<h2>Section title</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>

            <th><?php echo CHtml::encode($data->getAttributeLabel('id')); ?></th>
            <th><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?></th>
            <th><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?></th>
            <th><?php echo CHtml::encode($data->getAttributeLabel('image_uri')); ?></th>
            <th><?php echo CHtml::encode($data->getAttributeLabel('jersy_number')); ?></th>
            <th><?php echo CHtml::encode($data->getAttributeLabel('team_id')); ?></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?></td>
            <td><?php echo CHtml::encode($data->first_name); ?></td>
            <td><?php echo CHtml::encode($data->last_name); ?></td>
            <td><?php echo CHtml::encode($data->image_uri); ?></td>
            <td><?php echo CHtml::encode($data->jersy_number); ?></td>
            <td><?php echo CHtml::encode($data->team_id); ?></td>

        </tr>
        </tbody>
    </table>
</div>