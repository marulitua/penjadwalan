<?php

/**
 * This is the model class for table "trx_dosen".
 *
 * The followings are the available columns in table 'trx_dosen':
 * @property integer $id
 * @property integer $dosen_id
 * @property integer $periode_id
 *
 * The followings are the available model relations:
 * @property Dosen $dosen
 * @property Periode $periode
 */
class TrxDosen extends CActiveRecord {

    public $mata_kuliah;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return TrxDosen the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'trx_dosen';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('dosen_id, periode_id', 'required'),
            array('dosen_id, periode_id', 'numerical', 'integerOnly' => true),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, dosen_id, periode_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'dosen' => array(self::BELONGS_TO, 'Dosen', 'dosen_id'),
            'periode' => array(self::BELONGS_TO, 'Periode', 'periode_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'dosen_id' => 'Dosen',
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
        $criteria->compare('dosen_id', $this->dosen_id);
        $criteria->compare('periode_id', $this->periode_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function showMataKuliah() {
        $param = TrxMataKuliah::model()->findAll("trx_dosen_id = $this->id");
        $result = null;
        foreach ($param as $a) {
            if ($result)
                $result .= ", " . $a->mataKuliah->mata_kuliah;
            else
                $result = $a->mataKuliah->mata_kuliah;
        }
        return $result;

        return "";
    }
    
    public function showMataKuliah2() {
        $param = TrxMataKuliah::model()->findAll("trx_dosen_id = $this->id");
        $result = array();
        foreach ($param as $a) {
            array_push($result, $a->mataKuliah->id);
        }
        
        return $result;
    }
    
    public function dayToAdd(){
        $criteria = new CDbCriteria;

        $sql = TrxDosenTime::model()->findAll("trx_dosen_id = $this->id");

        $sql = CHtml::listData($sql, 'day_id', 'day_id');
        array_push($sql, 7);
        
        $criteria->addNotInCondition('id', $sql);
        

        return Day::model()->findAll($criteria);
    }
    
    public function dayToUpdate($param){
        $criteria = new CDbCriteria;

        $sql = TrxDosenTime::model()->findAll("trx_dosen_id = $this->id && id != $param ");

        $sql = CHtml::listData($sql, 'day_id', 'day_id');
        
        array_push($sql, 7);
        
        $criteria->addNotInCondition('id', $sql);
        

        return Day::model()->findAll($criteria);
    }

}