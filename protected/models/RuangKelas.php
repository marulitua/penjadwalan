<?php

/**
 * This is the model class for table "ruang_kelas".
 *
 * The followings are the available columns in table 'ruang_kelas':
 * @property integer $id
 * @property integer $room_rype
 * @property string $number
 * @property integer $floor
 *
 * The followings are the available model relations:
 * @property RoomType $roomRype
 * @property TrxJadwal[] $trxJadwals
 */
class RuangKelas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RuangKelas the static model class
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
		return 'ruang_kelas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('room_rype, number, floor', 'required'),
			array('room_rype, floor', 'numerical', 'integerOnly'=>true),
			array('number', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, room_rype, number, floor', 'safe', 'on'=>'search'),
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
			'roomRype' => array(self::BELONGS_TO, 'RoomType', 'room_rype'),
			'trxJadwals' => array(self::HAS_MANY, 'TrxJadwal', 'ruang_kelas'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'room_rype' => 'Room Rype',
			'number' => 'Number',
			'floor' => 'Floor',
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
		$criteria->compare('room_rype',$this->room_rype);
		$criteria->compare('number',$this->number,true);
		$criteria->compare('floor',$this->floor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}