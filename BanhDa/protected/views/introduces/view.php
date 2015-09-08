<?php
/* @var $this IntroducesController */
/* @var $model Introduces */

$this->breadcrumbs=array(
	'Introduces'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Introduces', 'url'=>array('index')),
	array('label'=>'Create Introduces', 'url'=>array('create')),
	array('label'=>'Update Introduces', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Introduces', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Introduces', 'url'=>array('admin')),
);
?>

<!-- <h1>View Introduces #<?php echo $model->id; ?></h1> -->

<?php /*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'introducecol',
		'content',
	),
)); */?>
<!-- <div class="content-page">
	<div id="noidung-box-texct-td" style="font-size:16px; font-weight:bold; color:#599e01; "><?php echo '<h1>'.$model->introducecol.'</h1>'; ?></div>
	<p class="content-news">
		<?php echo $model->content; ?>
	</p>
	<div class="clear"></div>
</div> -->

<div id="box-content1">
   <div id="tab-ctright"><?php echo $model->introducecol; ?></div>
     <div id="bg-ct-right1">
		<div id="bg-ct-right" style="line-height:19px; font-family:Arial, Helvetica, sans-serif">
		<p style="text-align:justify" class="MsoNormal" ><span style="font-size:14.0pt"> <strong><?php echo $model->content; ?> </strong> </p>
        </div>
    </div>
</div>
