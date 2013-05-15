<?php

/**
 * This is the model class for table "prodi".
 *
 * The followings are the available columns in table 'prodi':
 * @property integer $id
 * @property integer $fakultas_id
 * @property string $prodi_name
 * @property string $prodi_code
 *
 * The followings are the available model relations:
 * @property Fakultas $fakultas
 * @property TrxDosenProdi[] $trxDosenProdis
 */
class Prodi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Prodi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'prodi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fakultas_id, prodi_name, prodi_code', 'required'),
			array('fakultas_id', 'numerical', 'integerOnly'=>true),
			array('prodi_name, prodi_code', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fakultas_id, prodi_name, prodi_code', 'safe', 'on'=>'search'),
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
			'fakultas' => array(self::BELONGS_TO, 'Fakultas', 'fakultas_id'),
			'trxDosenProdis' => array(self::HAS_MANY, 'TrxDosenProdi', 'prodi'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fakultas_id' => 'Fakultas',
			'prodi_name' => 'Prodi Name',
			'prodi_code' => 'Prodi Code',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('fakultas_id',$this->fakultas_id);
		$criteria->compare('prodi_name',$this->prodi_name,true);
		$criteria->compare('prodi_code',$this->prodi_code,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}