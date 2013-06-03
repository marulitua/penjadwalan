<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class penjadwalan extends CComponent {

    public static function selected2($param, $id, $name, $data = FALSE) {
        
        $string = "<select multiple id=\"$id\" name=\"$name\" style=\"width: 300px;\" >";

        if ($param) {
            foreach ($param as $key => $value) {
                //<option value="11">Manajemen Keuangan 2</option>

                if ($data) {
                    if (in_array($key,$data))
                        $string .= "<option selected value=\"$key\">$value</option>";
                    else
                        $string .= "<option value=\"$key\">$value</option>";
                }
                else
                    $string .= "<option value=\"$key\">$value</option>";
            }
        }

        $string .= "</select>";

        self::scriptReady($id);
        
        return $string;
    }

    public static function scriptReady($id) {
         Yii::app()->clientScript->registerScript("$id", "$(\"#$id\").select2();");
    }

}

?>
