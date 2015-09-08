<?php
/* @var $this ViewcountsController */
/* @var $model Viewcounts */

$this->breadcrumbs=array(
	'Viewcounts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Viewcounts', 'url'=>array('index')),
	array('label'=>'Manage Viewcounts', 'url'=>array('admin')),
);
?>

<h1>Create Viewcounts</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>