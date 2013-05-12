<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <link ilo-full-src="images/favicon.ico" rel="SHORTCUT ICON" href="<?php echo Yii::app()->request->baseUrl; ?>/logo.ico" type="images/x-icon">
            <!-- blueprint CSS framework -->
            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
            <!--[if lt IE 8]>
            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
            <![endif]-->

            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

            <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <div class="container">
            <div class="row-fluid">
                <div class="span-20">
                    <div class="span-20 row" style="margin-top: 100px;">
                        <div class="well pagination-centered" style="margin-left: 400px; margin-right: 400px;">
                            <?php echo $content; ?>
                        </div>

                    </div>
                    <div id="footer" class="span-20">
                        <p class="lead text-info">
                        Copyright &copy; <?php echo date('Y'); ?> by Universitas Multimedia Nusantara.<br/>
                        All Rights Reserved.<br/>
                        </p>
                        <?php echo Yii::powered(); ?>
                    </div><!-- footer -->
                </div>
            </div>

        </div>
    </body>
</html>