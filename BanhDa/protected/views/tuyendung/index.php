<?php
/* @var $this TuyendungController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tuyendungs',
);

$this->menu=array(
	array('label'=>'Create Tuyendung', 'url'=>array('create')),
	array('label'=>'Manage Tuyendung', 'url'=>array('admin')),
);
?>
<h1><?php if(!Yii::app()->user->isGuest) { echo 'Tuyển dụng'; } ?></h1>
<div class="view">
	<div id="box-content1">
	   <div id="tab-ctright" style="font-size: 18px;"><?php if(Yii::app()->user->isGuest) { echo 'Tuyển dụng'; } ?></div>
	     <div id="bg-ct-right1">
			<div id="bg-ct-right" style="line-height:19px; font-family:Arial, Helvetica, sans-serif">
			<p style="text-align:justify" class="MsoNormal" ><span style="font-size:14.0pt"> 
				<?php
				if($dataProvider) {
					foreach ($dataProvider as $value) {
						echo $value->content;
					}
				}else{
						echo ' Nội dung đang được cập nhật!';					
					}
				?>
			 </p>
			 <?php if(Yii::app()->user->isGuest) { echo CHtml::link('>> Liên hệ ngay để biết thông tin chi tiết <<',array('site/contact'),array('color' => 'green')); } ?>
	        </div>
	    </div>
	</div>
</div>