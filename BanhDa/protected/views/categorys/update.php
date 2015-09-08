<?php
/* @var $this CategorysController */
/* @var $model Categorys */

$this->breadcrumbs=array(
	'Categorys'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Categorys', 'url'=>array('index')),
	array('label'=>'Create Categorys', 'url'=>array('create')),
	array('label'=>'View Categorys', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Categorys', 'url'=>array('admin')),
);
?>

<h1>Update Categorys <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>