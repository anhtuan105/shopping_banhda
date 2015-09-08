<?php

/**
 * This is the model class for table "viewcounts".
 *
 * The followings are the available columns in table 'viewcounts':
 * @property integer $id
 * @property integer $total
 * @property integer $current
 */
class Viewcounts extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'viewcounts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('total, current', 'required'),
			array('total, current', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, total, current', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'total' => 'Total',
			'current' => 'Current',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('total',$this->total);
		$criteria->compare('current',$this->current);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function newVisit()
	{
		$connection = Yii::app()->db;
		if($connection) 
		{
		   $sql = 'update ' . $this->tableName() . ' set total = total + 1;';
		   $command = $connection->createCommand($sql)->execute();
		}
	}
	
	public function visited()
	{
		// $connection=Yii::app()->db;
		// $sql = "SELECT total FROM viewcounts limit 1";
		// $command = $connection->createCommand($sql);            
		// $dataReader=$command->query();          
		// $rows=$dataReader->readAll();
		// return $rows['total'];
	
	
		$viewcount = $this->findAll(array( "limit" => 1 ));
		foreach ($viewcount as $key => $value) 
		{
			$total = $value->total;
		} 
		return array('total' => $total);
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Viewcounts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
}
