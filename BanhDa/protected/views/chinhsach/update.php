<?php
/* @var $this ChinhsachController */
/* @var $model Chinhsach */

$this->breadcrumbs=array(
	'Chinhsaches'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Chinhsach', 'url'=>array('index')),
	array('label'=>'Create Chinhsach', 'url'=>array('create')),
	array('label'=>'View Chinhsach', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Chinhsach', 'url'=>array('admin')),
);
?>

<h1>Update Chinhsach <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>