<?php
    namespace Controllers;
    class LojaController extends Controller{
        public function __construct(){
            $this->view = new \Views\MainView('loja');
        }
        
        public function executar(){
            $this->view->render(array('titulo'=>'Loja'));
        }
    }
?>