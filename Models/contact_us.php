<?php
    class contact_us extends Model{
        
        function __construct() {
            parent::__construct();
        }
        
        public function insert($name,$email,$title,$message)
        {
            return $this->execute_query("INSERT INTO contact_us (name,email,title,message) VALUES ('".$name."', '".$email."', '".$title."', '".$message."');");
        }
    }
