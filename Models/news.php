<?php
    class news extends Model
    {
        function __construct()
        {
            parent::__construct();
        }
        
        public function insert($name,$email,$message,$id){
            return $this->execute_query("INSERT INTO news_comment (name,email,message,news_id) VALUES ('".$name."', '".$email."', '".$message."',$id);");
        }
       
    }
