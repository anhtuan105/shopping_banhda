<?php
/* @var $this ProductsController */
/* @var $model Products */
/* @var $form CActiveForm */
?>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/ckeditor/ckeditor.js"></script>
<div class="form" charset=UTF-8>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'products-form',
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

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
 
	<div class="row">
		<?php echo $form->labelEx($model,'Code'); ?>
		<?php echo $form->textField($model,'description'); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cost'); ?>
		<?php echo $form->textField($model,'cost'); ?>
		<?php echo $form->error($model,'cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imageLink'); ?>
		<?php //echo $form->textField($model,'imageLink',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo CHtml::activeFileField($model, 'imageLink'); ?>
		<?php echo $form->error($model,'imageLink'); ?>
	</div>

	<?php if($model->isNewRecord!='1'){ ?>
	<div class="row">
	     <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/Product/'.$model->imageLink,"image",array("width"=>200)); ?>
	</div>
	<?php } ?>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6,'id'=>'noidung')); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unit'); ?>
		<?php echo $form->textField($model,'unit'); ?>
		<?php echo $form->error($model,'unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php //echo $form->textField($model,'category'); ?>
		<?php 
		     $list = CHtml::listData($categorys,'id','name');
		     echo CHtml::dropDownList('category',$categorys,$list);
		?>

		<?php echo $form->error($model,'category'); ?>
	</div>

<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		<?php echo CHtml::button('Cancel',array('submit' => array('products/index')));?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script>
  CKEDITOR.replace('noidung');
</script>  

