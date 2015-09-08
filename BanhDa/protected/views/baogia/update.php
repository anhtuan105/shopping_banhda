<?php
/* @var $this BaogiaController */
/* @var $model Baogia */

$this->breadcrumbs=array(
	'Baogias'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Baogia', 'url'=>array('index')),
	array('label'=>'Create Baogia', 'url'=>array('create')),
	array('label'=>'View Baogia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Baogia', 'url'=>array('admin')),
);
?>

<h1>Update Baogia <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>