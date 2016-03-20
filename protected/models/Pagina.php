<?php

/**
 * This is the model class for table "pagina".
 *
 * The followings are the available columns in table 'pagina':
 * @property integer $id
 * @property integer $ordem
 * @property string $caminho_arquivo
 * @property string $nome_arquivo
 * @property string $myme_type
 * @property integer $tamanho_arquivo
 * @property integer $capitulo_id
 *
 * The followings are the available model relations:
 * @property Capitulo $capitulo
 */
class Pagina extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pagina';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ordem, capitulo_id', 'required'),
			array('ordem, tamanho_arquivo, capitulo_id', 'numerical', 'integerOnly'=>true),
			array('caminho_arquivo, nome_arquivo', 'length', 'max'=>255),
			array('myme_type', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ordem, caminho_arquivo, nome_arquivo, myme_type, tamanho_arquivo, capitulo_id', 'safe', 'on'=>'search'),
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
			'capitulo' => array(self::BELONGS_TO, 'Capitulo', 'capitulo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ordem' => 'Ordem',
			'caminho_arquivo' => 'Caminho Arquivo',
			'nome_arquivo' => 'Nome Arquivo',
			'myme_type' => 'Myme Type',
			'tamanho_arquivo' => 'Tamanho Arquivo',
			'capitulo_id' => 'Capitulo',
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
		$criteria->compare('ordem',$this->ordem);
		$criteria->compare('caminho_arquivo',$this->caminho_arquivo,true);
		$criteria->compare('nome_arquivo',$this->nome_arquivo,true);
		$criteria->compare('myme_type',$this->myme_type,true);
		$criteria->compare('tamanho_arquivo',$this->tamanho_arquivo);
		$criteria->compare('capitulo_id',$this->capitulo_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pagina the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
