<?php
    namespace core;
    use lib\Db;
    class Model{
        public $db;
        public function __construct()
        {
            $this->db = new Db();
        }
    }
?>