<?php
    class Model extends DataBase {
        public $conn;
        function __construct()
        {
            parent::__construct();
        }
        public function execute_query($q)
        {
            $q = mysqli_query($this->conn, $q);
            if (mysqli_affected_rows($this->conn)>0)
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }   
        }
        
        public function get_one($table,$id)
        {
            $q = "SELECT * FROM $table WHERE `id` = $id" ;
            return mysqli_query($this->conn, $q);
        }
        
        public function get_all($table)
        {
            $q = "SELECT * FROM $table" ;
            return mysqli_query($this->conn, $q);
        }
        
        public function get_last($table,$id)
        {
            $q = "SELECT * FROM $table ORDER BY $id DESC" ;
            return mysqli_query($this->conn, $q);
        }
        
        public function select($q)
        {
            return mysqli_query($this->conn, $q);
        }
        
        public function delete($id,  $table){
            $q = "DELETE FROM $table WHERE `id` = $id";
            return $this->execute_query($q);
        }
    }
