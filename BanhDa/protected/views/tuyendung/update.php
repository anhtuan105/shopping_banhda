<?php
/* @var $this TuyendungController */
/* @var $model Tuyendung */

$this->breadcrumbs=array(
	'Tuyendungs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tuyendung', 'url'=>array('index')),
	array('label'=>'Create Tuyendung', 'url'=>array('create')),
	array('label'=>'View Tuyendung', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tuyendung', 'url'=>array('admin')),
);
?>

<h1>Update Tuyendung <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>