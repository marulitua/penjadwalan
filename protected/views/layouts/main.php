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
                        
            <link rel="stylesheet" type="text/css">

               

            </link>

    </head>

    <body>

        <div class="container" id="page" style="height:auto;height:100%;min-height:100%;position:relative;border:1px solid;width: 996px;top: 0px;">

            <div id="header">
                <div id="logo"><?php //echo CHtml::encode(Yii::app()->name);  ?></div>
            </div><!-- header -->



            <div class="well-transparent row-fluid" style="background-color: #0055cc;">
                <div class="span-5" style="margin-left: -5px;">
                    <?php
                    $this->widget('ext.CDropDownMenu.CDropDownMenu', array(
                        // 'style' => 'vertical', // or default or navbar
                        'items' => array(
                            array(
                                'label' => 'Home',
                                'url' => Yii::app()->baseUrl . '/index.php',
                                'visible' => !Yii::app()->user->isGuest,
                            ),
                            array(
                                'label' => 'Jadwal Perkuliahan',
                                'url' => Yii::app()->createUrl('/site/jadwalPerkuliahan'),
                                'visible' => !Yii::app()->user->isGuest,
                            ),
                            array(
                                'label' => 'Periode Perkuliahan',
                                'url' => Yii::app()->createUrl('periode/admin'),
                                'visible' => !Yii::app()->user->isGuest,
                            ),
                            array(
                                'label' => 'Kurikulum',
                                'url' => Yii::app()->createUrl('site/assignKurikulum'),
                                'visible' => !Yii::app()->user->isGuest,
                            ),
                            array(
                                'label' => 'Constraints',
                                'url' => 'JavaScript:void(0);',
                                'visible' => !Yii::app()->user->isGuest,
                                'items' => array(
                                    array(
                                        'label' => '1. Mata Kuliah',
                                        'url' => Yii::app()->createUrl('site/assignMatakuliah'),
                                    ),
                                    array(
                                        'label' => '2. Dosen',
                                        'url' => Yii::app()->createUrl('site/assignDosen'),
                                    ),
                                ),
                            ),
                            array(
                                'label' => 'Resources',
                                'url' => 'JavaScript:void(0);',
                                'visible' => !Yii::app()->user->isGuest,
                                'items' => array(
                                    array(
                                        'label' => '1. Mata Kuliah',
                                        'url' => array('//mataKuliah'),
                                    ),
                                    array(
                                        'label' => '2. Dosen',
                                        'url' => array('//dosen'),
                                    ),
                                    array(
                                        'label' => '3. Ruang Kelas',
                                        'url' => array('//ruangKelas', 'owner' => true),
                                    ),
                                ),
                            ),
                             array(
                                'label' => 'Fakultas & Program Studi',
                                'url' => 'JavaScript:void(0);',
                                'visible' => !Yii::app()->user->isGuest,
                                'items' => array(
                                    array(
                                        'label' => 'Fakultas',
                                        'url' => array('//fakultas'),
                                    ),
                                    array(
                                        'label' => 'Program Studi',
                                        'url' => array('//prodi'),
                                    ),
                                ),
                            ),
                            array('label' => 'About',
                                'url'=>array('/site/page', 'view'=>'about'),
                                'visible' => !Yii::app()->user->isGuest
                            ),
                            array('label' => 'Help',
                                'url'=> Yii::app()->createUrl('site/help'),
                                'visible' => !Yii::app()->user->isGuest
                            ),
                            array('label' => 'Logout (' . Yii::app()->user->name . ')',
                                'url' => array('/site/logout'),
                                'visible' => !Yii::app()->user->isGuest
                            ),
                        )
                            )
                    );
                    ?>


                </div>



                <?php
//                $this->widget('zii.widgets.CMenu',array(
//			'items'=>array(
//				array('label'=>'Home', 'url'=>array('/site/index')),
//				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
//				array('label'=>'Contact', 'url'=>array('/site/contact')),
//				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
//				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
//			),
//		)); 
                ?>
            </div><!-- mainmenu -->
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div class="clear"></div>

            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> by Universitas Multimedia Nusantara.<br/>
                All Rights Reserved.<br/>
                <?php echo Yii::powered(); ?>
            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>