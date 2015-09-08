<?php
/* @var $this AmthucController */
/* @var $model Amthuc */

$this->breadcrumbs=array(
	'Amthucs'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Amthuc', 'url'=>array('index')),
	array('label'=>'Create Amthuc', 'url'=>array('create')),
	array('label'=>'View Amthuc', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Amthuc', 'url'=>array('admin')),
);
?>

<h1>Update Amthuc <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>