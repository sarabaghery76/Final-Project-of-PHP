<?php
    class newadmin extends Model
    {
        function __construct()
        {
            parent::__construct();
        }
        
        public function search($title){
            return $this->select("SELECT * FROM `news` WHERE title LIKE '%".$title."%'");
        }
        
        public function insert($title, $excerpt, $content, $pic, $cat_id){
            $q = "INSERT INTO `news`(`title`, `excerpt`, `content`, `pic`, `cat_id`) VALUES ('$title','$excerpt','$content','$pic',$cat_id)";
            $r = $this->execute_query($q);
            return $r;
        }
        
        public function update_without_pic($title, $excerpt, $content, $cat_id,$id)
        {
            $q = "UPDATE `news` SET `title`='$title',`excerpt`='$excerpt',`content`='$content',`cat_id`=$cat_id WHERE `id`=$id" ;
            $r = $this->execute_query($q);
            return $r;
        }
        
        public function update_with_pic($title, $excerpt, $content, $pic, $cat_id,$id)
        {   
            $q = "UPDATE `news` SET `title`='$title',`excerpt`='$excerpt',`content`='$content',`pic`='$pic',`cat_id`=$cat_id WHERE `id`=$id" ;
            $r = $this->execute_query($q);
            return $r;
        }
        
    }
