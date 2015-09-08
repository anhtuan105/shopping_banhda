<?php
/* @var $this StoreController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stores',
);

$this->menu=array(
	array('label'=>'Create Store', 'url'=>array('create')),
	array('label'=>'Manage Store', 'url'=>array('admin')),
);
?>
<h1><?php if(!Yii::app()->user->isGuest) { echo 'Đại lý - khách hàng'; } ?></h1>
<div class="view">

<?php
			if($dataProvider) {
				$i = 1; 
				foreach ($dataProvider as $value) {
					echo '<strong style="display:inline;">';
					echo  $i;
					echo '. </strong> ';
					echo $value->content;
					echo '<br />';
					$i++;
				}
			}else{
					echo ' Nội dung đang được cập nhật!';					
				}
			?>

</div>

