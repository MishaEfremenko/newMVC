<?php
    namespace controllers;
    use core\Controller;
    class catalogController extends Controller{
        public function run(){
            $cat='';//массив с товарами
            if ($_GET['cat']!=null){
                $cat= $this->model->db->fetchrow("SELECT * FROM `products` WHERE `category` LIKE :cat",['cat'=>$_GET['cat']]);
                if ($cat==null)
                    $this->view->error404();
                else
                    $this->view->render('catalog',['items'=>$cat,'title'=>'Товары']);
            }
            else if ($_GET['id']!=null){
                $cat= $this->model->db->fetchrow("SELECT * FROM `products` WHERE `id` LIKE :id",['id'=>$_GET['id']]);
                if ($cat==null)
                    $this->view->error404();
                else
                    $this->view->render('catalogsingle',['item'=>$cat[0],'title'=>$cat[0]['name']]);
            }
            else{
                $cat= $this->model->db->fetchrow('SELECT * FROM `products`');
                $this->view->render('catalog',['items'=>$cat,'title'=>'Товары']);
            }
        }
    }
?>