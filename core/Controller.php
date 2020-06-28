<?php
    namespace core;
    use core\View;
    use core\Model;
    
    abstract class Controller{
        public $view;
        public $model;

        public function __construct()
        {
            $this->view = new View();
            $this->model = new Model();
        }
    }
?>