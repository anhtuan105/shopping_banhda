<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
<?php if(!Yii::app()->user->isGuest): ?>
	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				//array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Product', 'url'=>array('/products')),
				array('label'=>'New', 'url'=>array('/news')),
				array('label'=>'Category', 'url'=>array('/categorys')),
				array('label'=>'HotNew', 'url'=>array('/hotNews')),
				array('label'=>'HotProduct', 'url'=>array('/hotProducts')),
				array('label'=>'NewProduct', 'url'=>array('/newProducts')),
				array('label'=>'SileShow', 'url'=>array('/slideshow')),
				array('label'=>'Introduce', 'url'=>array('/introduces')),
				array('label'=>'CostReport', 'url'=>array('/baogia')),
				array('label'=>'Store', 'url'=>array('/store')),
				array('label'=>'Recruitment', 'url'=>array('/tuyendung')),
				array('label'=>'FoodNews', 'url'=>array('/amthuc')),

				//array('label'=>'Login', 'url'=>array('/admin/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/admin/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
<?php endif; ?>

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by OTD<br/>
		Open Technology Development<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
<style type="text/css">
#menu {
	
	width: 150px;
	display: block;
	height: 235px;
	background-color: #ccc;
	color: white;

}
#tab_menu_admin {
	margin-top: 30px;
}
</style>