<?php
/* @var $this NewProductsController */
/* @var $model NewProducts */

$this->breadcrumbs=array(
	'New Products'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NewProducts', 'url'=>array('index')),
	array('label'=>'Create NewProducts', 'url'=>array('create')),
	array('label'=>'View NewProducts', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage NewProducts', 'url'=>array('admin')),
);
?>

<h1>Update NewProducts <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>