<?php
class Controller{
    public $model;

    public function performAction(){
        return;
    }

    public function renderView($view,$data=[]){
        extract($data);

        include "./views/template.php";
    }
}
?>