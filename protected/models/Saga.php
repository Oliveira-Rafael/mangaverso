<?php

/**
 * This is the model class for table "saga".
 *
 * The followings are the available columns in table 'saga':
 * @property integer $id
 * @property string $saga
 * @property string $data_lancamento
 * @property integer $obra_id
 *
 * The followings are the available model relations:
 * @property Capitulo[] $capitulos
 * @property Obra $obra
 */
class Saga extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'saga';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('saga, obra_id', 'required'),
			array('obra_id', 'numerical', 'integerOnly'=>true),
			array('saga', 'length', 'max'=>100),
			array('data_lancamento', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, saga, data_lancamento, obra_id', 'safe', 'on'=>'search'),
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
			'capitulos' => array(self::HAS_MANY, 'Capitulo', 'saga_id'),
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
			'saga' => 'Saga',
			'data_lancamento' => 'Data Lancamento',
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
		$criteria->compare('saga',$this->saga,true);
		$criteria->compare('data_lancamento',$this->data_lancamento,true);
		$criteria->compare('obra_id',$this->obra_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Saga the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
