<?php

class TrxKurikulumController extends Controller {

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
                'actions' => array('create', 'update'),
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
        $model = new TrxKurikulum;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['TrxKurikulum'])) {
            $model->attributes = $_POST['TrxKurikulum'];
            $model->periode_id = Periode::model()->active()->id;
//            echo '<br><pre>';
//            var_dump($_POST);
//            echo '</pre>';
            if ($model->save()) {

//                if ($_POST['TrxKurikulum']['day_id'] == "")
//                    $_POST['TrxKurikulum']['day_id'] = '1,2,3,4,5';

                //$param = Day::model()->findId($_POST['TrxKurikulum']['day_id']);

                $param = explode(',', $_POST['TrxKurikulum']['day_id']);
                foreach ($param as $a) {
                    $model2 = new TrxDay;
                    $model2->trx_kurikulum_id = $model->id;
                    $model2->day_id = $a;
                    $model2->save();
                }

                if ($_POST['TrxKurikulum']['ruang_kelas'] != "") {
                    $param = explode(',', $_POST['TrxKurikulum']['ruang_kelas']);
                    foreach ($param as $a) {
                        $model2 = new TrxRoom();
                        $model2->trx_kurikulum_id = $model->id;
                        $model2->room_id = $a;
                        $model2->save();
                    }
                }

                $this->redirect(array('trxKurikulum/admin'));
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

        if (isset($_POST['TrxKurikulum'])) {
            $model->attributes = $_POST['TrxKurikulum'];
            if ($model->save()) {
                //delete all

                TrxDay::model()->deleteAll("trx_kurikulum_id = $model->id");


//                if ($_POST['TrxKurikulum']['day_id'] == "")
//                    $_POST['TrxKurikulum']['day_id'] = '1,2,3,4,5';

                $param = $param = explode(',', $_POST['TrxKurikulum']['day_id']);
                foreach ($param as $a) {
                    $model2 = new TrxDay;
                    $model2->trx_kurikulum_id = $model->id;
                    $model2->day_id = $a;
                    $model2->save();
                }
                
                TrxRoom::model()->deleteAll("trx_kurikulum_id = $model->id");
                
                if ($_POST['TrxKurikulum']['ruang_kelas'] != "") {
                    $param = explode(',', $_POST['TrxKurikulum']['ruang_kelas']);
                    foreach ($param as $a) {
                        $model2 = new TrxRoom();
                        $model2->trx_kurikulum_id = $model->id;
                        $model2->room_id = $a;
                        $model2->save();
                    }
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

        TrxDay::model()->deleteAll("trx_kurikulum_id = $id");
        TrxRoom::model()->deleteAll("trx_kurikulum_id = $id");
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('TrxKurikulum');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new TrxKurikulum('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['TrxKurikulum']))
            $model->attributes = $_GET['TrxKurikulum'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return TrxKurikulum the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = TrxKurikulum::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param TrxKurikulum $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'trx-kurikulum-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
