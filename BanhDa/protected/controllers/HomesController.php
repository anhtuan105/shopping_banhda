<?php

class HomesController extends Controller
{

	public function actionIndex()
	{
		
			if(isset($_POST['ajax'])){
				$slideShows  = Slideshow::model()->findAll();
		       	$images = array();
		        if($slideShows) {
		            foreach ($slideShows as $slideShow) {
		            	$images[] = $slideShow->imageLink;
		            }
		            echo json_encode($images);
		        }
			}else{
				$newProducts = NewProducts::model()->findAll();
		        $hotProducts = HotProducts::model()->findAll(array("limit"=>16));
		        $amthucs 	 = Amthuc::model()->findAll(array("order"=>'id DESC',"limit"=>4));
		        if($newProducts || $hotProducts) {
		            $newProduct = array();
		            foreach ($newProducts as $newProduct1) {
		            	$product = Products::model()->findByPk($newProduct1->product_id);
		            	if($product) {
		                	$newProduct[$newProduct1->id] = $product;
		                }
		            }

		            foreach ($hotProducts as $key => $value) {
		            	$product = Products::model()->find('id=:product_id',array(':product_id'=>$value->product_id));
		            	if($product) {
		                	$products[] = $product;
		            	}
		            }

		            if(($newProduct && $products) || $amthucs) {
			            $this->render('index', array('newProduct' => $newProduct,'products' => $products,'amthucs'=>$amthucs));
		            }
		            else {
		            	$this->render('index');
		            }
		        }
		     }
	
	}
	

	public function actionImage()
	{
	}


/*
	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}