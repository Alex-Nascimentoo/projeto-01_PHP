<?php
define('INCLUDE_PATH','http://localhost/PHP/projeto1/');
    define('INCLUDE_PATH_FULL','http://localhost/PHP/projeto1/Views/pages/');
    class Application{
        public function executar(){
            $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';
            $url = ucfirst($url);
            $url.= 'Controller';
            if(file_exists('Controllers/'.$url.'.php')){
                $className = 'Controllers\\'.$url;
                $controller = new $className();
                $controller->executar();
            }else{
                die('Esse controlador não existe');
            }
        }
    }
?>