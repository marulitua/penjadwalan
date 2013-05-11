<?php

/**
 * This is the model class for table "trx_dosen_makul".
 *
 * The followings are the available columns in table 'trx_dosen_makul':
 * @property integer $id
 * @property integer $dosen
 * @property integer $makul
 * @property integer $periode
 *
 * The followings are the available model relations:
 * @property Dosen $dosen0
 * @property MataKuliah $makul0
 * @property Periode $periode0
 */
class TrxDosenMakul extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TrxDosenMakul the static model class
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
		return 'trx_dosen_makul';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dosen, makul, periode', 'required'),
			array('dosen, makul, periode', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, dosen, makul, periode', 'safe', 'on'=>'search'),
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
			'dosen0' => array(self::BELONGS_TO, 'Dosen', 'dosen'),
			'makul0' => array(self::BELONGS_TO, 'MataKuliah', 'makul'),
			'periode0' => array(self::BELONGS_TO, 'Periode', 'periode'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'dosen' => 'Dosen',
			'makul' => 'Makul',
			'periode' => 'Periode',
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
		$criteria->compare('dosen',$this->dosen);
		$criteria->compare('makul',$this->makul);
		$criteria->compare('periode',$this->periode);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}