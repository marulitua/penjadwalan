<?php

class TrxDosenController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'hari'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new TrxDosen;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['TrxDosen'])) {
//                    echo '<br><pre>';
//                    var_dump($_POST['TrxDosen']);
//                    echo '</pre>';
            $model->attributes = $_POST['TrxDosen'];
            $model->periode_id = Periode::model()->active()->id;
            if ($model->save()) {
                $param = explode(',', $_POST['TrxDosen']['mata_kuliah']);
                foreach ($param as $a) {
                    $model2 = new TrxMataKuliah;
                    $model2->trx_dosen_id = $model->id;
                    $model2->mata_kuliah = $a;
                    $model2->save();
                }
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['TrxDosen'])) {
            $model->attributes = $_POST['TrxDosen'];
            if ($model->save()) {
                TrxMataKuliah::model()->deleteAll("trx_dosen_id = $model->id");
                
                $param = explode(',', $_POST['TrxDosen']['mata_kuliah']);
                foreach ($param as $a) {
                    $model2 = new TrxMataKuliah;
                    $model2->trx_dosen_id = $model->id;
                    $model2->mata_kuliah = $a;
                    $model2->save();
                }
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        TrxMataKuliah::model()->deleteAll("trx_dosen_id = $id");
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('TrxDosen');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new TrxDosen('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['TrxDosen']))
            $model->attributes = $_GET['TrxDosen'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return TrxDosen the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = TrxDosen::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param TrxDosen $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'trx-dosen-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
    
    public function actionhari(){
        
        Yii::app()->clientScript->scriptMap = array(
            '*.js'         => false,
            'select2.min.js'  => true,
        );
        
        $this->layout = false;
        $model = TrxDosen::model()->findByPk($_GET["trxDosen"]);
        $this->render('hari', array(
            'model' => $model,
        ));
    }

}
