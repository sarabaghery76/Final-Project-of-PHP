<?php
    class messageadmin extends Model
    {
        function __construct()
        {
            parent::__construct();
        }

        public function edit($table,$id,$message)
        {
            return $this->update($table,$id,$message);
        }

        public function get_message($table,$id)
        {
          return $this->selectOne($table,$id);
        }
        
        public function update($title,$name,$message,$id)
        {
            $q = "UPDATE `contact_us` SET `name`='$name',`message`='$message',`title`='$title' WHERE `id`=$id" ;
            $r = $this->execute_query($q);
            return $r;
        }
    }
