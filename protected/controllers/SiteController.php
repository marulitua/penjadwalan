<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        if (Yii::app()->user->isGuest)
            $this->actionLogin();
        else
            $this->render('index');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        if (Yii::app()->user->isGuest)
            $this->actionLogin();
        else {
            $model = new ContactForm;
            if (isset($_POST['ContactForm'])) {
                $model->attributes = $_POST['ContactForm'];
                if ($model->validate()) {
                    $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                    $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                    $headers = "From: $name <{$model->email}>\r\n" .
                            "Reply-To: {$model->email}\r\n" .
                            "MIME-Version: 1.0\r\n" .
                            "Content-type: text/plain; charset=UTF-8";

                    mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                    Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                    $this->refresh();
                }
            }
            $this->render('contact', array('model' => $model));
        }
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        //$this->layout = '//layouts/main';
        //echo '$this->layout = '.$this->layout;
        //echo '<br><pre>';
        $this->layout = 'login';
        //var_dump($content);
        //echo '</pre><br>';
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionAssignDosen() {
        $param = array();
        $this->render('assignDosen', $param);
    }

    public function actionAssignMatakuliah() {
        $param = array();
        $this->render('assignMatakuliah', $param);
    }

    public function actionAssignKurikulum() {
        $param = array();
        $this->render('assignKurikulum', $param);
    }

    public function actionjadwalPerkuliahan() {
        $param = array();
        $this->render('jadwalPerkuliahan', $param);
    }

    public function actionhelp() {
        $param = array();
        $this->render('help', $param);
    }

    public function actionSayHiToJava() {

        $PORT = 20222; //the port on which we are connecting to the "remote" machine
        $HOST = "localhost"; //the ip of the remote machine (in this case it's the same machine)

        $sock = socket_create(AF_INET, SOCK_STREAM, 0) //Creating a TCP socket
                or die("error: could not create socket\n");

        $succ = socket_connect($sock, $HOST, $PORT) //Connecting to to server using that socket
                or die("error: could not connect to host\n");

        $text = "2"; //the text we want to send to the server

        socket_write($sock, $text . "\n", strlen($text) + 1) //Writing the text to the socket
                or die("error: failed to write to socket\n");

        $reply = socket_read($sock, 10000, PHP_NORMAL_READ) //Reading the reply from socket
                or die("error: failed to read from socket\n");

        echo $reply;
    }

}