<?php

/**
 * This is the model class for table "trx_room".
 *
 * The followings are the available columns in table 'trx_room':
 * @property integer $id
 * @property integer $trx_kurikulum_id
 * @property integer $room_id
 *
 * The followings are the available model relations:
 * @property TrxKurikulum $trxKurikulum
 * @property RuangKelas $room
 */
class TrxRoom extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TrxRoom the static model class
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
		return 'trx_room';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('trx_kurikulum_id, room_id', 'required'),
			array('trx_kurikulum_id, room_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, trx_kurikulum_id, room_id', 'safe', 'on'=>'search'),
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
			'trxKurikulum' => array(self::BELONGS_TO, 'TrxKurikulum', 'trx_kurikulum_id'),
			'room' => array(self::BELONGS_TO, 'RuangKelas', 'room_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'trx_kurikulum_id' => 'Trx Kurikulum',
			'room_id' => 'Room',
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
		$criteria->compare('trx_kurikulum_id',$this->trx_kurikulum_id);
		$criteria->compare('room_id',$this->room_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}