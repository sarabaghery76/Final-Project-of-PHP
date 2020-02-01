<?php
    class news_catController extends Controller {
        function __construct() {
            parent::__construct();
        }
        function show_new(){
            
            $id = $_GET['id'];
            $allNews = $this->model->get_just_once_cat($id);
            $data['allNews'] = $allNews;
            $this->view->render('front/news',$data);
        }
    }
