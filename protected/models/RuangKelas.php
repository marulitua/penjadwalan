<?php

/**
 * This is the model class for table "ruang_kelas".
 *
 * The followings are the available columns in table 'ruang_kelas':
 * @property integer $id
 * @property integer $praktek
 * @property string $number
 * @property string $keterangan
 *
 * The followings are the available model relations:
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
			array('praktek, number', 'required'),
			array('praktek', 'numerical', 'integerOnly'=>true),
			array('number', 'length', 'max'=>50),
			array('keterangan', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, praktek, number, keterangan', 'safe', 'on'=>'search'),
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
			'praktek' => 'Praktek',
			'number' => 'Number',
			'keterangan' => 'Keterangan',
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
//
//                if($this->praktek == 0)
//                    $this->praktek = 'Teori';
//                else
//                    $this->praktek = 'Praktek';
            
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('praktek',$this->praktek);
		$criteria->compare('number',$this->number,true);
		$criteria->compare('keterangan',$this->keterangan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}