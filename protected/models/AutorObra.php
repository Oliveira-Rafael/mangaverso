<?php

/**
 * This is the model class for table "autor_obra".
 *
 * The followings are the available columns in table 'autor_obra':
 * @property integer $id
 * @property integer $autor_id
 * @property integer $obra_id
 *
 * The followings are the available model relations:
 * @property Autor $autor
 * @property Obra $obra
 */
class AutorObra extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'autor_obra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('autor_id, obra_id', 'required'),
			array('autor_id, obra_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, autor_id, obra_id', 'safe', 'on'=>'search'),
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
			'autor' => array(self::BELONGS_TO, 'Autor', 'autor_id'),
			'obra' => array(self::BELONGS_TO, 'Obra', 'obra_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'autor_id' => 'Autor',
			'obra_id' => 'Obra',
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
		$criteria->compare('autor_id',$this->autor_id);
		$criteria->compare('obra_id',$this->obra_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AutorObra the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
