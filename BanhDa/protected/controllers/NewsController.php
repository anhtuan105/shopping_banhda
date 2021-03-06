<?php

class NewsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$news = News::model()->findByAttributes(array('id' => $id));
		$diffNews = News::model()->findAll(array('order' => 'id DESC'));
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'news' => $news,
			'diffNews' => $diffNews,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new News;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['News']))
        {

            //$rnd = rand(0,9999);  // generate random number between 0-9999
            $model->attributes=$_POST['News'];
 			
 			//upload image and save filename into database
            $uploadedFile=CUploadedFile::getInstance($model,'imageLink');
            //$model->origin = $uploadedFile;
            if($uploadedFile) {
            	$fileExtensionName = $uploadedFile->extensionName;
            	$md5FileName = md5($uploadedFile);
            	$fileName = "{$md5FileName }.{$fileExtensionName}";  // random number + file name
            	
 			}else {
 				$fileName = 'default.jpg';
 			}
 			$model->imageLink = $fileName;
 			//save data into database
            if($model->save())
            {
	            //if click checkbox it will insert news_id to hotnews
	            if(isset($_POST['news_check'])) {
		        	$new = news::model()->find('title=:title',array(':title'=>$model->title));
		        	$id = $new->id;
		        	$tableName = 'hotnews';
		        	$hotNew = HotNews::model()->find('news_id=:news_id',array(':news_id'=>$id));
		        	if(!$hotNew) {
						$this->insertData($tableName,$id);		        
		        	}
	        	}

	        	if($uploadedFile) {
	                $uploadedFile->saveAs(Yii::app()->basePath.'/../images/news/'.$fileName);  // image will upload to rootDirectory/images/
	        	}
                $this->redirect(array('admin'));
            }
        }

		$this->render('create',array('model'=>$model));
	}

	public function insertData($tableName,$value)
	{
		$connection = Yii::app()->db;
		if($connection) {
		   $sql = "insert into $tableName(news_id) values('$value')";
		   $command = $connection->createCommand($sql)->execute();
		}
	}
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['News']))
        {

            //$rnd = rand(0,9999);  // generate random number between 0-9999
            $model->attributes=$_POST['News'];
 			
 			//upload image and save filename into database
            $uploadedFile=CUploadedFile::getInstance($model,'imageLink');
            //$model->origin = $uploadedFile;
            if($uploadedFile) {
            	$fileExtensionName = $uploadedFile->extensionName;
            	$md5FileName = md5($uploadedFile);
            	$fileName = "{$md5FileName }.{$fileExtensionName}";  // random number + file name
            	
 			}else {

 				$fileName = 'default.jpg';
 			}
 			$model->imageLink = $fileName;
 			//save data into database
            if($model->save())
            {
	            //if click checkbox it will insert news_id to hotnews
	            if(isset($_POST['news_check'])) {
		        	$new = news::model()->find('title=:title',array(':title'=>$model->title));
		        	$id = $new->id;
		        	$tableName = 'hotnews';
		        	$hotNew = HotNews::model()->find('news_id=:news_id',array(':news_id'=>$id));
		        	if(!$hotNew) {
						$this->insertData($tableName,$id);		        
		        	}
	        	}

	        	if(!empty($uploadedFile)) {
	                $uploadedFile->saveAs(Yii::app()->basePath.'/../images/news/'.$fileName);  // image will upload to rootDirectory/images/
	        	}
                $this->redirect(array('admin'));
            }
        }

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		//if(Yii::app()->user->isGuest) {
			$dataProvider=new CActiveDataProvider('News');
			$news = News::model()->findAll(array('order' => 'id DESC'));
			$this->render('index',array(
				'dataProvider'=>$dataProvider,
				'news' => $news,
			));
		//}else {
		//	$this->redirect(array('news/admin'));
		//}
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new News('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['News']))
			$model->attributes=$_GET['News'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return News the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=News::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param News $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='news-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
