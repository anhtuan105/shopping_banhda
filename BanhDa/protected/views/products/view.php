<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-2.1.0.min.js"></script>

<div class="content-page">
		 <input type="hidden" name="visit" id="visit1" value="" />
	
		<?php echo '<h1>'.$cate.'</h1>';?>
<!-- begin div -->
	<div class="box-table-ima-home" onLoad="CheckPageLoad();">
		<div class="table-ima-det">
			<span style="padding-right:10px;">
			<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/Product/'.$model->imageLink,'image product',array('width'=>'300','height'=>'300')); ?>
			</span>
		</div>
		<div class="table-ima-detail2">
			<div id="noidung-spd" style="font-size:16px; padding-bottom:10px">
				<a href="#" class="text-newstieude" style="font-size:18px"><?php echo $model->name; ?> </a>
			</div>
			<div id="noidung-spd" style="line-height:22px">
				<?php echo '<strong> Mã sản phẩm: </strong>'.$model->description; ?>
				<?php echo '<br />'; ?>
				<?php echo '<strong> Xuất xứ: </strong>Việt Nam'; ?>
				<?php echo '<br />'; ?>

				<?php echo '<strong> Tình trạng: </strong>'.$model->status; ?>

			</div>
			<div class="style4" id="noidung-textnd-2-2" style="padding-top:10px; font-weight:bold">
				Giá bán: <strong> <span class="style5"><?php echo Yii::app()->format->number($model->cost); ?> </span><?php echo $model->unit; ?></strong>
			</div>
			<div class="style4" id="noidung-textnd-2-2" style=" padding-top:10px; font-weight:bold">
				Đã có: <span class="style5"><?php echo $model->viewCount; ?></span> lượt khách xem sản phẩm này
			</div>
			<div class="clear"></div>
			<div class="share-button">
				<p>Chia sẻ sản phẩm với bạn bè: </p>
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
			</div>

			<div id="noidung-spd" style="line-height:19px">
				<?php 
					echo '<strong style="font-size: 21px;">  Quý khách có nhu cầu Đặt Hàng.<br />Vui lòng liên hệ:</strong>';
					echo '<br /> <br />';
					echo '<strong style="font-size: 24px;">0982.093.089 or 0936.212.089</strong>';
				?>
			</div>
		</div>
	</div>
	<!--  -->
	<div class="box-table-ima-home2">
		<div id="noidung-spd" style="padding-bottom:16px"><a href="#" class="text-newstieude">Mô tả chi tiết</a></div>
		<div id="noidung-textnd-2-2">
			<?php echo $model->content;?>
		</div>
	</div>
	<div class="clear"></div>
</div>


<?php
/* @var $this ProductsController */
/* @var $model Products */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Products', 'url'=>array('index')),
	array('label'=>'Create Products', 'url'=>array('create')),
	array('label'=>'Update Products', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Products', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Products', 'url'=>array('admin')),
);
?>

<!-- 
<body onLoad="CheckPageLoad();">

    <input type="hidden" name="visit" id="visit" value="" />

</body> -->

<script>
function CheckPageLoad() {
    if (document.getElementById("visit1").value == "") 
    {
        // This is a fresh page load
        document.getElementById("visit1").value = "1";
    }
    else {
        // This is a page refresh
       /*  $.ajax({
        	type: "POST",
        	url: "",
        	data: { ajax: 1 }
    		});*/
		$.post(
			url: "",
			ajax: 1
			);
    }
}
</script>
