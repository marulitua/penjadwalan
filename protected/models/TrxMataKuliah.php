<?php

/**
 * This is the model class for table "trx_mata_kuliah".
 *
 * The followings are the available columns in table 'trx_mata_kuliah':
 * @property integer $id
 * @property integer $trx_dosen_id
 * @property integer $mata_kuliah
 *
 * The followings are the available model relations:
 * @property TrxDosen $trxDosen
 * @property MataKuliah $mataKuliah
 */
class TrxMataKuliah extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TrxMataKuliah the static model class
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
		return 'trx_mata_kuliah';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('trx_dosen_id, mata_kuliah', 'required'),
			array('trx_dosen_id, mata_kuliah', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, trx_dosen_id, mata_kuliah', 'safe', 'on'=>'search'),
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
			'trxDosen' => array(self::BELONGS_TO, 'TrxDosen', 'trx_dosen_id'),
			'mataKuliah' => array(self::BELONGS_TO, 'MataKuliah', 'mata_kuliah'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'trx_dosen_id' => 'Trx Dosen',
			'mata_kuliah' => 'Mata Kuliah',
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
		$criteria->compare('trx_dosen_id',$this->trx_dosen_id);
		$criteria->compare('mata_kuliah',$this->mata_kuliah);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}