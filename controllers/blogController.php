<?php
    namespace controllers;
    use core\Controller;
    class blogController extends Controller{
        public function run(){
            if ($_GET['id']!=null){
                $cat= $this->model->db->fetchrow("SELECT * FROM `states` WHERE `id` LIKE :id",['id'=>$_GET['id']]);
                $cats= $this->model->db->fetchrow('SELECT * FROM `states`');
                if ($cat==null)
                    $this->view->error404();
                else
                    $this->view->render('blogsingle',['item'=>$cat[0],'items'=>$cats,'title'=>$cat[0]['name']]);
            }
            else{
                $cat= $this->model->db->fetchrow('SELECT * FROM `states`');
                $this->view->render('blog',['items'=>$cat,'title'=>'статьи']);
            }
        }
    }
?>