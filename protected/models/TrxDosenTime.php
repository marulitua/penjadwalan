<?php

/**
 * This is the model class for table "trx_dosen_time".
 *
 * The followings are the available columns in table 'trx_dosen_time':
 * @property integer $id
 * @property integer $day_id
 * @property integer $trx_dosen_id
 * @property integer $start_time
 * @property integer $end_time
 *
 * The followings are the available model relations:
 * @property TrxDosen $trxDosen
 * @property Day $day
 */
class TrxDosenTime extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TrxDosenTime the static model class
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
		return 'trx_dosen_time';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('day_id, trx_dosen_id, start_time, end_time', 'required'),
			array('day_id, trx_dosen_id, start_time, end_time', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, day_id, trx_dosen_id, start_time, end_time', 'safe', 'on'=>'search'),
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
			'day_id' => 'Day',
			'trx_dosen_id' => 'Trx Dosen',
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
		$criteria->compare('day_id',$this->day_id);
		$criteria->compare('trx_dosen_id',$this->trx_dosen_id);
		$criteria->compare('start_time',$this->start_time);
		$criteria->compare('end_time',$this->end_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function btn(){
            $btn = '';
            
            $btn .= CHtml::link('<i class="icon-edit"></i>', Yii::app()->createAbsoluteUrl('trxDosen/hari&toUpdate=' . $this->id.'&trxDosen='.$this->trx_dosen_id), array('class' => 'testing'));
            $btn .= CHtml::link('<i class="icon-remove"></i>', 'javascript:hapus('.$this->trx_dosen_id.','.$this->id.');');
            //$btn .= CHtml::button('', array('trxDosen' => $this->trx_dosen_id, 'toRemove' => $this->id, 'class' => 'icon-remove', 'id' => 'btnHapus'));
            
            
            return $btn;
        }
        
        public function startTime(){
            return date('H:i', strtotime($this->start_time));
        }
        
        public function endTime(){
            return date('H:i', strtotime($this->end_time));
        }
}