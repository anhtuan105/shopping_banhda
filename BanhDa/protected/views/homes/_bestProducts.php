<div id="bg-ct-right1">
	<div id="bg-ct-right">
		<?php
			echo '<div>';
				echo '<ul>';
					if($products) {
	                    $temp = 1;
						foreach ($products as $key => $value) {
							echo '<li class="product-show">';
							if ($temp % 4 == 0) {
								echo '<div id="box-sp2">';	
							} else {
								echo '<div id="box-sp">';
							}
							echo '<div id="bgbox-sp">';
								$imglink = CHtml::image(Yii::app()->request->baseUrl.'/images/Product/'.$value->imageLink,'image product',array('width'=>'156','height'=>'156'));
								echo CHtml::link($imglink, array('products/view','id'=>$value->id));
							echo '</div>';
							echo '<div id="box-tdsp">';
								echo CHtml::link($value->name,array('products/view','id'=>$value->id),array('class'=>'title1'));
								echo '<br>';
								echo 'Giá bán: <strong>'.Yii::app()->format->number($value->cost).' '.$value->unit.'</strong>';
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
	</div>
</div>