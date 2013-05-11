<?php

/**
 * This is the model class for table "trx_jadwal".
 *
 * The followings are the available columns in table 'trx_jadwal':
 * @property integer $id
 * @property integer $dosen
 * @property integer $mata_kuliah
 * @property integer $ruang_kelas
 * @property integer $periode
 * @property string $start_time
 * @property string $end_time
 *
 * The followings are the available model relations:
 * @property Dosen $dosen0
 * @property MataKuliah $mataKuliah
 * @property Periode $periode0
 * @property RuangKelas $ruangKelas
 */
class TrxJadwal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TrxJadwal the static model class
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
		return 'trx_jadwal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dosen, mata_kuliah, ruang_kelas, periode, start_time, end_time', 'required'),
			array('dosen, mata_kuliah, ruang_kelas, periode', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, dosen, mata_kuliah, ruang_kelas, periode, start_time, end_time', 'safe', 'on'=>'search'),
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
			'mataKuliah' => array(self::BELONGS_TO, 'MataKuliah', 'mata_kuliah'),
			'periode0' => array(self::BELONGS_TO, 'Periode', 'periode'),
			'ruangKelas' => array(self::BELONGS_TO, 'RuangKelas', 'ruang_kelas'),
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
			'mata_kuliah' => 'Mata Kuliah',
			'ruang_kelas' => 'Ruang Kelas',
			'periode' => 'Periode',
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
		$criteria->compare('dosen',$this->dosen);
		$criteria->compare('mata_kuliah',$this->mata_kuliah);
		$criteria->compare('ruang_kelas',$this->ruang_kelas);
		$criteria->compare('periode',$this->periode);
		$criteria->compare('start_time',$this->start_time,true);
		$criteria->compare('end_time',$this->end_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}