<?php

/**
 * This is the model class for table "trx_dosen".
 *
 * The followings are the available columns in table 'trx_dosen':
 * @property integer $id
 * @property integer $dosen_id
 * @property integer $mata_kuliah_id
 * @property integer $periode_id
 * @property integer $day_id
 * @property string $start_time
 * @property string $end_time
 *
 * The followings are the available model relations:
 * @property Dosen $dosen
 * @property MataKuliah $mataKuliah
 * @property Periode $periode
 * @property Day $day
 */
class TrxDosen extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TrxDosen the static model class
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
		return 'trx_dosen';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dosen_id, mata_kuliah_id, periode_id, day_id, start_time, end_time', 'required'),
			array('dosen_id, mata_kuliah_id, periode_id, day_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, dosen_id, mata_kuliah_id, periode_id, day_id, start_time, end_time', 'safe', 'on'=>'search'),
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
			'dosen' => array(self::BELONGS_TO, 'Dosen', 'dosen_id'),
			'mataKuliah' => array(self::BELONGS_TO, 'MataKuliah', 'mata_kuliah_id'),
			'periode' => array(self::BELONGS_TO, 'Periode', 'periode_id'),
			'day' => array(self::BELONGS_TO, 'Day', 'day_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'dosen_id' => 'Dosen',
			'mata_kuliah_id' => 'Mata Kuliah',
			'periode_id' => 'Periode',
			'day_id' => 'Day',
			'start_time' => 'Start Time',
			'end_time' => 'End Time',
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
		$criteria->compare('dosen_id',$this->dosen_id);
		$criteria->compare('mata_kuliah_id',$this->mata_kuliah_id);
		$criteria->compare('periode_id',$this->periode_id);
		$criteria->compare('day_id',$this->day_id);
		$criteria->compare('start_time',$this->start_time,true);
		$criteria->compare('end_time',$this->end_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}