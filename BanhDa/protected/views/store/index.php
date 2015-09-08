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
<div id="box-content1">
   <div id="tab-ctright"><?php if(Yii::app()->user->isGuest) { echo 'Đại lý - khách hàng'; } ?></div>
     <div id="bg-ct-right1">
		<div id="bg-ct-right" style="line-height:19px; font-family:Arial, Helvetica, sans-serif">
		<p style="text-align:justify" class="MsoNormal" ><span style="font-size:14.0pt">
			<?php
			if($dataProvider) {
				$i = 1; 
				foreach ($dataProvider as $value) {
					echo '<strong>';
					echo  $i;
					echo '.</strong> ';
					echo $value->content;
					echo '<br />';
					$i++;
				}
			}else{
					echo ' Nội dung đang được cập nhật!';					
				}
			?>
		 </p>
		 <?php if(Yii::app()->user->isGuest) {  echo CHtml::link('>> Liên hệ ngay để biết thông tin chi tiết <<',array('site/contact')); } ?>
        </div>
    </div>
</div>
