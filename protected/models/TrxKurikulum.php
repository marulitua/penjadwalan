<?php

/**
 * This is the model class for table "trx_kurikulum".
 *
 * The followings are the available columns in table 'trx_kurikulum':
 * @property integer $id
 * @property integer $mata_kuliah_id
 * @property integer $day_id
 * @property integer $jumlah_kelas
 * @property integer $periode_id
 *
 * The followings are the available model relations:
 * @property Day $day
 * @property MataKuliah $mataKuliah
 * @property Periode $periode
 */
class TrxKurikulum extends CActiveRecord {

    public $day;
    public $ruang_kelas;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return TrxKurikulum the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'trx_kurikulum';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('periode_id', 'required'),
            array('mata_kuliah_id, jumlah_kelas, periode_id', 'numerical', 'integerOnly' => true),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, mata_kuliah_id, jumlah_kelas, periode_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'mataKuliah' => array(self::BELONGS_TO, 'MataKuliah', 'mata_kuliah_id'),
            'periode' => array(self::BELONGS_TO, 'Periode', 'periode_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'mata_kuliah_id' => 'Mata Kuliah',
            'jumlah_kelas' => 'Jumlah Kelas',
            'periode_id' => 'Periode',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('mata_kuliah_id', $this->mata_kuliah_id);
        $criteria->compare('jumlah_kelas', $this->jumlah_kelas);
        $criteria->compare('periode_id', $this->periode_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function findDay() {
        $param = TrxDay::model()->findAll("trx_kurikulum_id = $this->id");
        $result = null;
        foreach ($param as $a) {
            if ($result)
                $result .= ", " . $a->day->day;
            else
                $result = $a->day->day;
        }   
        return $result;
    }

    public function findDay2() {
        $param = TrxDay::model()->findAll("trx_kurikulum_id = $this->id");
        $result = array();
        foreach ($param as $a) {
            array_push($result, $a->day->id);
        }
        
        return $result;
    }
    
    public function findRoom(){
        $param = TrxRoom::model()->findAll("trx_kurikulum_id = $this->id");
        $result = null;
        foreach ($param as $a) {
            if ($result)
                $result .= ", " . $a->room->number;
            else
                $result = $a->room->number;
        }   
        return $result;
    }
    
    public function findRoom2() {
        $param = TrxRoom::model()->findAll("trx_kurikulum_id = $this->id");
        $result = array();
        foreach ($param as $a) {
            array_push($result, $a->room->id);
        }
        
        return $result;
    }

}