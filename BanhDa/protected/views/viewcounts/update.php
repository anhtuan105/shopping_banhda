<?php
/* @var $this ViewcountsController */
/* @var $model Viewcounts */

$this->breadcrumbs=array(
	'Viewcounts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Viewcounts', 'url'=>array('index')),
	array('label'=>'Create Viewcounts', 'url'=>array('create')),
	array('label'=>'View Viewcounts', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Viewcounts', 'url'=>array('admin')),
);
?>

<h1>Update Viewcounts <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>