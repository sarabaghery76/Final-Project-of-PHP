<?php
    class DataBase
    {
        public $conn;
        function __construct()
        {
            $this->conn = new mysqli(HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            mysqli_query($this->conn,'set names "utf8mb4"');
            $this->conn->set_charset("utf8mb4");
            
            if(mysqli_error($this->conn)){
              die("Connection failed!");
            }
        }
    }
