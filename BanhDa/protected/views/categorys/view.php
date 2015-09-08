<div id="content-right">
	<div id="box-content1">
		<div id="tab-ctright">
			<?php 
			 if(!Yii::app()->user->isGuest) {
			 	echo '<strong style="font-size:28px;border: 1px solid #ccc;">';	
					echo $model->name;
				echo '</strong>';
			 }else{
					echo $model->name;
			 }
			?>
		</div>
		<div id="bg-ct-right1">
			<div id="bg-ct-right">
				<!-- begin div -->
				<?php
					if($products) {
						$temp = 1;
						foreach ($products as $key => $value) {
							if ($temp % 4 == 0) {
								echo '<div id="box-sp2">';	
							} else {
								echo '<div id="box-sp">';
							}
							echo '<div id="bgbox-sp">';
							 if(Yii::app()->user->isGuest) {
								$imglink = CHtml::image(Yii::app()->request->baseUrl.'/images/category/'.$value->imageLink,'image product',array('width'=>'156','height'=>'156'));
								echo CHtml::link($imglink, array('products/view','id'=>$value->id));
							}
							echo '</div>';
							echo '<div id="box-tdsp">';
								echo CHtml::link($value->name,array('products/view','id'=>$value->id),array('class'=>'title1'));
								echo '<br>';
							if(Yii::app()->user->isGuest) {
								echo 'Giá bán: <strong>'.Yii::app()->format->number($value->cost).' '.$value->unit.'</strong>';
							}
							echo '</div>';
							echo '</div>';
							$temp += 1;

						}	
					} else {
						echo 'San pham dang cap nhat!';
					}
				?>
				<!-- end div-->
			</div>
		</div>
	</div>
</div>
<?php
/*$this->menu=array(
	array('label'=>'List Products', 'url'=>array('index')),
	array('label'=>'Create Products', 'url'=>array('create')),
	array('label'=>'Update Products', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Products', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Products', 'url'=>array('admin')),
);*/
?>