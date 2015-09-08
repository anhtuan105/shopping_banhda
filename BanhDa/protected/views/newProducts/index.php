<?php
/* @var $this NewProductsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'New Products',
);

$this->menu=array(
	array('label'=>'Create NewProducts', 'url'=>array('create')),
	array('label'=>'Manage NewProducts', 'url'=>array('admin')),
);
?>

<h1>Sản phẩm mới</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
