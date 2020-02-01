<?php
    class mainController extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            //$this->loadModel("newadmin");
            $allNews = $this->model->get_last("news","id");
            $data['allNews'] = $allNews;
            
            //$this->loadModel("slideradmin");
            $allSliders = $this->model->get_all("slider");
            $data['allSliders'] = $allSliders;
            
            //$this->loadModel("messageadmin");
            $allMessages = $this->model->get_all("contact_us");
            $data['allMessages'] = $allMessages;
            
            //$this->loadModel("news_cat");
            $allNews_cat = $this->model->get_all("news_cat");
            
            $allNews_cat2 = [];
            while ($row = $allNews_cat->fetch_assoc()) {
                $counter = 0;
                $id = $row['id'];
                $row['news'] = [];
                while ($new = $allNews->fetch_assoc()){
                    if($id == $new['cat_id']){
                        array_push($row['news'], ['id' =>$new['id'] , 'title' => $new['title'] , 'excerpt' => $new['excerpt'] , 'visit_count' => $new['visit_count'] , 'pic' => $new['pic'] ]);
                        $counter++;
                        if ($counter==5)
                            break;
                    }
                }
                $allNews_cat2[] = $row;
                mysqli_data_seek($allNews, 0);
            }
            
            mysqli_data_seek($allNews_cat, 0);
            $data['allNews_cat'] = $allNews_cat;
            $data['allNews_cat2'] = $allNews_cat2;
//            foreach($allNews_cat2 as $key => $value){
//                ev($value['title']);
//            }
//die('');
            $this->view->header();
            $this->view->render('front/index',$data);
            $this->view->footer();
            
        }
        
//        public function news_type(){
//            
//            $id = $_GET['id'];
//            $this->loadModel("news_cat");
//            $allNewsthiscat = $this->model->get_all($id);
//            $data['allNewsthiscat'] = $allNewsthiscat;
//            return $data;
//        }

    public function news_list(){
        $data['allNews'] = $this->model->get_all("news");
        $data['lastNews'] = $this->model->get_last("news","id");
        $data['most_seen'] = $this->model->get_last("news","visit_count");
        
        $this->view->header();
        $this->view->render('front/news_list',$data);
        $this->view->footer();
    }

    public function single_new(){
        $id = $_GET['id'];
        $data['one_new'] = $this->model->get_one("news", $id);
        $data['comments'] = $this->model->get_one("news_comment",$id);
        
        $this->view->header();
        $this->view->render('front/single',$data);
        $this->view->footer();
    }

    public function search(){
            
            $title = $_POST['title'];
            $this->loadModel("newadmin");
            $allSearchs = $this->model->search($title);
            $data['allSearchs'] = $allSearchs;
            
            $this->view->header();
            $this->view->render('front/search',$data);
            $this->view->footer();
        }
        
    }
   
