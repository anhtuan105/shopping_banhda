<?php
/* @var $this HotNewsController */
/* @var $model HotNews */

$this->breadcrumbs=array(
	'Hot News'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List HotNews', 'url'=>array('index')),
	array('label'=>'Create HotNews', 'url'=>array('create')),
	array('label'=>'View HotNews', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage HotNews', 'url'=>array('admin')),
);
?>

<h1>Update HotNews <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>