<?php
    class slideradmin extends Model
    {
        function __construct()
        {
            parent::__construct();
        }
        
        public function insert($title, $pic){
            $q = "INSERT INTO `slider`(`title`,`address`) VALUES ('$title','$pic')";
            $r = $this->execute_query($q);
            return $r;
        }
        
        public function update_without_pic($title,$id)
        {
            $q = "UPDATE `slider` SET `title`='$title' WHERE `id`=$id" ;
            $r = $this->execute_query($q);
            return $r;
        }
        
        public function update_with_pic($title,$pic,$id)
        {   
            $q = "UPDATE `slider` SET `title`='$title',`address`='$pic' WHERE `id`=$id" ;
            $r = $this->execute_query($q);
            return $r;
        }
    }
