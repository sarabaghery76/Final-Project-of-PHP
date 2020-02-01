<?php
    class news_cat extends Model {
        function __construct()
        {
          parent::__construct();
        }
        static function get_just_once_cat($id){
            return $this->select("SELECT * FROM news where cat_id=".$id);
        }
    }
