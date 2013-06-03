<?php
    
class myView extends CWidget {

    public static function render($id) {
        return $this->render('hari', array('id' => id));
    }

}


?>
