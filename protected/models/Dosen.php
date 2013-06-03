<?php

/**
 * This is the model class for table "dosen".
 *
 * The followings are the available columns in table 'dosen':
 * @property integer $id
 * @property string $full_name
 * @property string $NI
 *
 * The followings are the available model relations:
 * @property TrxDosenMakul[] $trxDosenMakuls
 * @property TrxDosenProdi[] $trxDosenProdis
 * @property TrxJadwal[] $trxJadwals
 */
class Dosen extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Dosen the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'dosen';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('full_name, NI', 'required'),
            array('full_name, NI', 'length', 'max' => 50),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, full_name, NI', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'trxDosenMakuls' => array(self::HAS_MANY, 'TrxDosenMakul', 'dosen'),
            'trxDosenProdis' => array(self::HAS_MANY, 'TrxDosenProdi', 'dosen'),
            'trxJadwals' => array(self::HAS_MANY, 'TrxJadwal', 'dosen'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'full_name' => 'Full Name',
            'NI' => 'Ni',
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
        $criteria->compare('full_name', $this->full_name, true);
        $criteria->compare('NI', $this->NI, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function dosenToAdd() {
        $criteria = new CDbCriteria;

        $sql = TrxDosen::model()->findAll();

        $sql = CHtml::listData($sql, 'dosen_id', 'dosen_id');

        $criteria->addNotInCondition('id', $sql);

        return $this->findAll($criteria);
    }

}