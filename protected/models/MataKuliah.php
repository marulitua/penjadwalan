<?php

/**
 * This is the model class for table "mata_kuliah".
 *
 * The followings are the available columns in table 'mata_kuliah':
 * @property integer $id
 * @property string $mata_kuliah
 * @property string $mata_kuliah_code
 * @property integer $praktek
 * @property integer $sks
 *
 * The followings are the available model relations:
 * @property TrxDosenMakul[] $trxDosenMakuls
 * @property TrxJadwal[] $trxJadwals
 * @property TrxJadwalRequirement[] $trxJadwalRequirements
 */
class MataKuliah extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MataKuliah the static model class
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
		return 'mata_kuliah';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mata_kuliah, mata_kuliah_code, praktek, sks', 'required'),
			array('praktek, sks', 'numerical', 'integerOnly'=>true),
			array('mata_kuliah, mata_kuliah_code', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, mata_kuliah, mata_kuliah_code, praktek, sks', 'safe', 'on'=>'search'),
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
			'trxDosenMakuls' => array(self::HAS_MANY, 'TrxDosenMakul', 'makul'),
			'trxJadwals' => array(self::HAS_MANY, 'TrxJadwal', 'mata_kuliah'),
			'trxJadwalRequirements' => array(self::HAS_MANY, 'TrxJadwalRequirement', 'mata_kuliah'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'mata_kuliah' => 'Mata Kuliah',
			'mata_kuliah_code' => 'Mata Kuliah Code',
			'praktek' => 'Praktek',
			'sks' => 'Sks',
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
		$criteria->compare('mata_kuliah',$this->mata_kuliah,true);
		$criteria->compare('mata_kuliah_code',$this->mata_kuliah_code,true);
		$criteria->compare('praktek',$this->praktek);
		$criteria->compare('sks',$this->sks);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function mataKuliahToAdd(){
                $criteria=new CDbCriteria;

                $sql = TrxKurikulum::model()->findAll();
                
                $sql = CHtml::listData($sql, 'mata_kuliah_id', 'mata_kuliah_id');
                
                $criteria->addNotInCondition('id', $sql);
		
                return $this->findAll($criteria);
        }
}