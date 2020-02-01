<?php
    class View {
        public $nc;
        
        function __construct() {
            require_once 'Models/news_cat.php';
            $this->nc = new news_cat();
        }
                
        function header()
        {
            $data['allNews_cat'] = $this->nc->get_all("news_cat");
            $this->render('front/header',$data);
        }
        function footer()
        {
            $data['allNews_cat'] = $this->nc->get_all("news_cat");
            $this->render('front/footer',$data);
        }
        public function render($view_name, $data = NULL)
        {
            if($data)
            {
                foreach($data as $key => $value)
                {
                        $$key = $value;
                }
            }

            require "Views/" . $view_name . ".php";
        }
    }
