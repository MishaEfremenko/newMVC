<?php
    namespace core;
    class View{
        public function render($path='home',$params=[]){
            extract($params);
            include 'views/template_parts/header.php';
            require 'views/'.$path.'.php';
            require 'views/template_parts/footer.php';
        }
        public function error404(){
            echo '404';
        }
    }
?>