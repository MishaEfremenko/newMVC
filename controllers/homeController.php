<?php
    namespace controllers;
    use core\Controller;

    class homeController extends Controller{
        public function run(){
            $this->view->render('home',['title'=>'My home page',
            'description'=>'Главная страница']);
        }
    }
?>