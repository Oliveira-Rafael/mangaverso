<?php

/**
 * This is the model class for table "obra".
 *
 * The followings are the available columns in table 'obra':
 * @property integer $id
 * @property string $obra
 * @property string $data_lancamento
 * @property integer $editora_id
 *
 * The followings are the available model relations:
 * @property AutorObra[] $autorObras
 * @property Editora $editora
 * @property Saga[] $sagas
 */
class Obra extends CActiveRecord
{
	public $editora_nome;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'obra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('obra', 'required'),
			array('editora_id', 'numerical', 'integerOnly'=>true),
			array('obra', 'length', 'max'=>100),
			array('data_lancamento', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, obra, data_lancamento, editora_id, editora_nome', 'safe', 'on'=>'search'),
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
			'autorObras' => array(self::HAS_MANY, 'AutorObra', 'obra_id'),
			'editora' => array(self::BELONGS_TO, 'Editora', 'editora_id'),
			'sagas' => array(self::HAS_MANY, 'Saga', 'obra_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'obra' => 'Obra',
			'data_lancamento' => 'Data de Lançamento',
			'editora_id' => 'Editora',
			'editora_nome' => 'Editora',
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
		$criteria->with = array('editora');

		$criteria->compare('t.id',$this->id);
		$criteria->compare('t.obra',$this->obra,true);
		$criteria->compare('t.data_lancamento',$this->data_lancamento,true);
		$criteria->compare('editora.editora',$this->editora_nome,true);
		$criteria->compare('t.editora_id',$this->editora_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Obra the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function beforeSave()
	{
		$data = DateTime::createFromFormat('d/m/Y', $this->data_lancamento);
		$this->data_lancamento = $data->format('Y-m-d');
		return true;
	}


	public function afterFind()
	{
		$data = DateTime::createFromFormat('Y-m-d', $this->data_lancamento);
		$this->data_lancamento = $data->format('d/m/Y');
		return true;
	}

}
