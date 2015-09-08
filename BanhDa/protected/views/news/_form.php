<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/ckeditor/ckeditor.js"></script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<!-- 	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div> -->
	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imageLink'); ?>
		<?php //echo $form->textField($model,'imageLink',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo CHtml::activeFileField($model, 'imageLink'); ?>
		<?php echo $form->error($model,'imageLink'); ?>
	</div>

	<?php if($model->isNewRecord!='1'){ ?>
	<div class="row">
	     <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/news/'.$model->imageLink,"image",array("width"=>200)); ?>
	</div>
	<?php } ?>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6,'id'=>'noidung')); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>
	
	<div class="row">
		<strong>Tin mới</strong>
		<?php echo CHtml::CheckBox('news_check',false); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		<?php echo CHtml::button('Cancel',array('submit' => array('news/index')));?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

 <script>
    CKEDITOR.replace('noidung');
 </script>  