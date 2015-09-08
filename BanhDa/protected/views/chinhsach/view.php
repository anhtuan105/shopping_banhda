<?php
/* @var $this ChinhsachController */
/* @var $model Chinhsach */

$this->breadcrumbs=array(
	'Chinhsaches'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Chinhsach', 'url'=>array('index')),
	array('label'=>'Create Chinhsach', 'url'=>array('create')),
	array('label'=>'Update Chinhsach', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Chinhsach', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Chinhsach', 'url'=>array('admin')),
);
?>

<!-- <h1>View Chinhsach #<?php echo $model->id; ?></h1> -->

<?php /*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'content',
	),
)); */?>
<div id="box-content1">
   <div id="tab-ctright"><?php echo $model->name; ?></div>
     <div id="bg-ct-right1">
		<div id="bg-ct-right" style="line-height:19px; font-family:Arial, Helvetica, sans-serif">
		<p style="text-align:justify" class="MsoNormal" ><span style="font-size:14.0pt"> <strong><?php echo $model->content; ?> </strong> </p>
        </div>
    </div>
</div>
