<?php
/* @var $this IntroducesController */
/* @var $model Introduces */

$this->breadcrumbs=array(
	'Introduces'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Introduces', 'url'=>array('index')),
	array('label'=>'Create Introduces', 'url'=>array('create')),
	array('label'=>'View Introduces', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Introduces', 'url'=>array('admin')),
);
?>

<h1>Update Introduces <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>