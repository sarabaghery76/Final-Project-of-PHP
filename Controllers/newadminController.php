<?php
    class newadminController extends Controller {
        public $table="news";
        
        function __construct() {
            parent::__construct();
        }
    
        public function index ()
        {
            $allNews = $this->model->get_all($this->table);
            $data['allNews'] = $allNews;
            $this->view->render('admin/news', $data);
        }    

        public function delete_new()
        {
            $id = $_GET['id'];
            $result = $this->model->delete($id,  $this->table);
            if ($result)
                $this->data['successfully'] = 'خبر مورد نظر با موفقیت حذف گردید.' ;
            else 
                $this->data['errors'] = 'خبر مورد نظر حذف نگردید.' ;

            $this->index();
        }

        public function update_new()
        {
            unset($this->data['successfully']);
            unset($this->data['errors']);
            
            if(isset($_GET['id']) && ($_GET['id'].trim(""))){
                $id = $_GET['id'];
                $data['new'] = $this->model->get_one($this->table,$id);
                $data['allNews_cat'] = $this->model->get_all("news_cat");
                $this->view->render("admin/form_update_new", $data);
            }
            
            if(isset($_POST['title']) && isset($_POST['excerpt']) && isset($_POST['content']) && ($_POST['content'].trim("")) && ($_POST['title'].trim("")) && ($_POST['excerpt'].trim("")))
            {
                $id = $_POST['id'];
                $title = $_POST['title'];
                $excerpt = $_POST['excerpt'];
                $content = $_POST['content'];
                $cat_id = $_POST['cat_id'];

                if(isset($_FILES['fileToUpload']['name']) && ($_FILES['fileToUpload']['name'].trim("")))
                {
                    if( ($_FILES['fileToUpload']['error']) > 0 ){
                        echo 'ERROR : ' . $_FILES['fileToUpload']['error'];
                    }
                    else {
                        if( $_FILES['fileToUpload']['size'] < 500000 )
                        {
                            if( $_FILES['fileToUpload']['type'] == "image/png" ||  ($_FILES['fileToUpload']['type'] == "image/jpeg") )
                            {
                                $name = $_FILES["fileToUpload"]["name"];
                                $tmp_name = $_FILES["fileToUpload"]["tmp_name"];

                                if(file_exists(BASE_URL."Public/images/" .$tmp_name))
                                {
                                    $rnd = rand();
                                    $tmp_name = $tmp_name . $rnd;
                                }

                                move_uploaded_file($tmp_name,"Public/images/$name");

                                $pic = $name;
                                $result = $this->model->update_with_pic($title, $excerpt, $content, $pic, $cat_id,$id);
                            }
                            else
                            {
                                 echo 'you must select file with type jpg or png ';
                            }
                        }
                        else {
                            echo 'you must select file with size < 500KB ';
                        }
                    }
                }
                else
                {
                    $result = $this->model->update_without_pic($title, $excerpt, $content, $cat_id,$id);
                }
                
                if ($result)
                {
                    echo 'ویرایش shod';
                    $this->data['successfully'] = 'خبر با موفقیت ویرایش شد.' ;
                }
                else {
                    echo 'nashod ویرایش';
                    $this->data['errors'] = 'خبر ویرایش نشد';
                }
            }
            else
            {
                echo "لطفا فیلدها را تکمیل کنید.";
            }
        }

        public function insert_new()
        {
            unset($this->data['successfully']);
            unset($this->data['errors']);
            
            $data['allNews_cat'] = $this->model->get_all("news_cat");
            $this->view->render('admin/form_insert_new',$data);
            if(isset($_POST['title']) && isset($_POST['excerpt']) && isset($_POST['content']) && ($_POST['content'].trim("")) && ($_POST['title'].trim("")) && ($_POST['excerpt'].trim("")) && isset($_FILES['fileToUpload']['name']) && ($_FILES['fileToUpload']['name'].trim("")))
            {
                $title = $_POST['title'];
                $excerpt = $_POST['excerpt'];
                $content = $_POST['content'];
                $cat_id = $_POST['cat_id'];
                
                if( ($_FILES['fileToUpload']['error']) > 0 ){
                    echo 'ERROR : ' . $_FILES['fileToUpload']['error'];
                }
                else {
                    if( $_FILES['fileToUpload']['size'] < 500000 )
                    {
                        if( $_FILES['fileToUpload']['type'] == "image/png" ||  ($_FILES['fileToUpload']['type'] == "image/jpeg") )
                        {
                            $name = $_FILES["fileToUpload"]["name"];
                            $tmp_name = $_FILES["fileToUpload"]["tmp_name"];
                
                            if(file_exists(BASE_URL."Public/images/" .$tmp_name))
                            {
                                $rnd = rand();
                                $tmp_name = $tmp_name . $rnd;
                            }
                            
                            move_uploaded_file($tmp_name,"Public/images/$name");

                            $pic = $name;
                            $result = $this->model->insert($title, $excerpt, $content, $pic, $cat_id);
                            
                            if ($result)
                            {
                                echo 'sabt shod';
                                $this->data['successfully'] = 'خبر با موفقیت ثبت شد.' ;
                            }
                            else {
                                echo 'nashod sabt';
                                $this->data['errors'] = 'خبر ثبت نشد';
                            }
                            
                        }
                        else
                        {
                             echo 'you must select file with type jpg or png ';
                        }
                    }
                    else {
                        echo 'you must select file with size < 500KB ';
                    }
                }
            }
            else
            {
                echo "لطفا فیلدها را تکمیل کنید.";
            }
        }
}
