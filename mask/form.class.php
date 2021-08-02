<?php 
class Form{
    private $action;

    function __construct($action = "index.php"){
        $this->action = $action;        
    }

    function __toString(){
        $form = '<center>';
        $form .= '<form action="'.$this->action.'" method="get">';
        $form .= 'address: <input type="text" name="address">';
        $form .= '<input type="submit" value="submit">';
        $form .= '</form>';
        $form .= '</center>'; 
        return $form;
    }

}