<?php

/**
 * This is the model class for table "periode".
 *
 * The followings are the available columns in table 'periode':
 * @property integer $id
 * @property string $tahun_ajar
 * @property integer $semester
 * @property integer $flag
 *
 * The followings are the available model relations:
 * @property TrxDosenMakul[] $trxDosenMakuls
 * @property TrxDosenProdi[] $trxDosenProdis
 * @property TrxJadwal[] $trxJadwals
 * @property TrxJadwalRequirement[] $trxJadwalRequirements
 */
class Periode extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Periode the static model class
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
		return 'periode';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tahun_ajar, semester, flag', 'required'),
			array('semester, flag', 'numerical', 'integerOnly'=>true),
			array('tahun_ajar', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tahun_ajar, semester, flag', 'safe', 'on'=>'search'),
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
			'trxDosenMakuls' => array(self::HAS_MANY, 'TrxDosenMakul', 'periode'),
			'trxDosenProdis' => array(self::HAS_MANY, 'TrxDosenProdi', 'periode'),
			'trxJadwals' => array(self::HAS_MANY, 'TrxJadwal', 'periode'),
			'trxJadwalRequirements' => array(self::HAS_MANY, 'TrxJadwalRequirement', 'periode'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tahun_ajar' => 'Tahun Ajar',
			'semester' => 'Semester',
			'flag' => 'Flag',
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
		$criteria->compare('tahun_ajar',$this->tahun_ajar,true);
		$criteria->compare('semester',$this->semester);
		$criteria->compare('flag',$this->flag);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}