<?php

/**
 * This is the model class for table "products".
 *
 * The followings are the available columns in table 'products':
 * @property integer $id
 * @property string $name
 * @property integer $cost
 * @property string $imageLink
 * @property string $create_time
 * @property string $update_time
 * @property string $content
 * @property integer $discountCost
 * @property string $unit
 * @property integer $category
 * @property integer $viewCount
 * @property string $description
 */
class Products extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'products';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, cost,content, unit, category', 'required'),
			array('cost, discountCost, category, viewCount', 'numerical', 'integerOnly'=>true),
			array('name,status', 'length', 'max'=>255),
			array('imageLink, unit', 'length', 'max'=>255, 'on'=>'insert,update'),
			array('imageLink', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
			array('create_time, update_time, description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, cost,status, imageLink, create_time, update_time, content, discountCost, unit, category, viewCount, description', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'cost' => 'Cost',
			'imageLink' => 'Image',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'content' => 'Content',
			'discountCost' => 'Discount Cost',
			'unit' => 'Unit',
			'category' => 'Category',
			'viewCount' => 'View Count',
			'description' => 'Description',
			'status' => 'Status'
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('cost',$this->cost);
		$criteria->compare('imageLink',$this->imageLink,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('discountCost',$this->discountCost);
		$criteria->compare('unit',$this->unit,true);
		$criteria->compare('category',$this->category);
		$criteria->compare('viewCount',$this->viewCount);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Products the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
