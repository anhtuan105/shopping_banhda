<?php
/* @var $this HotProductsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hot Products',
);

$this->menu=array(
	array('label'=>'Create HotProducts', 'url'=>array('create')),
	array('label'=>'Manage HotProducts', 'url'=>array('admin')),
);
?>

<h1>Sản phẩm nổi bật</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
