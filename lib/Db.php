<?php
    namespace lib;
    use PDO;
    class Db{
        protected $db;
        public function __construct()
        {
            $config = require 'config/db.php';
            $this->db=new PDO('mysql:host='.$config['host'].';dbname='.$config['database'].';charset=utf8',$config['user'],$config['password']);
        }
        public function query($sql,$params=[]){
            $stmt=$this->db->prepare($sql);
            if (!empty($params)){
                foreach($params as $key => $val){
                    $stmt->bindValue(':'.$key,$val);
                }
            }
            $stmt->execute();
            return $stmt;
        }
        public function fetchrow($sql,$params=[]){
            $res=$result=$this->query($sql,$params);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>