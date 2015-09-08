<?php
$this->menu=array(
	array('label'=>'Create Categories', 'url'=>array('create')),
	array('label'=>'Manage Categories', 'url'=>array('admin')),
);
?>
<div class="content-page">
	<h1>Danh sách loại sản phẩm</h1>
	<?php
		echo '<div><ul>';
				if($categories) {
                    $temp = 1;
					foreach ($categories as $key => $value) {
						echo '<li class="product-show">';
						if ($temp % 4 == 0) {
							echo '<div id="box-sp2">';	
						} else {
							echo '<div id="box-sp">';
						}
						echo '<div id="bgbox-sp">';
						 if(Yii::app()->user->isGuest) {
								$imglink = CHtml::image(Yii::app()->request->baseUrl.'/images/Product/'.$value->imageLink,'image product',array('width'=>'156','height'=>'156'));
								echo CHtml::link($imglink, array('categorys/view','id'=>$value->id));
							}
						echo '</div>';
						echo '<div id="box-tdsp">';
							echo CHtml::link($value->name,array('categorys/view','id'=>$value->id),array('class'=>'title1'));
						echo '</div>';
						echo '</div>';
						$temp += 1;
						echo '</li>';
					}
				} else {
					echo 'San pham dang cap nhat!';
				}
			echo '</ul>';
		echo '</div>';
	?>
	<div class="clear"></div>
</div>
