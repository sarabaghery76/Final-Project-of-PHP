<?php
    class news_catadmin extends Model {
        
        function __construct()
        {
          parent::__construct();
        }
        
        public function insert($title){
            $q = "INSERT INTO `news_cat`(`title`) VALUES ('$title')";
            $r = $this->execute_query($q);
            return $r;
        }
        
        public function update($title,$id)
        {
            $q = "UPDATE `news_cat` SET `title`='$title' WHERE `id`=$id" ;
            $r = $this->execute_query($q);
            return $r;
        }
    }
