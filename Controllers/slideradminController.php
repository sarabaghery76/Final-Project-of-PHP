<?php
    class slideradminController extends Controller {
        
        public $table = "slider";
                
        function __construct() {
            parent::__construct();
        }
        
        function index(){
            $allSliders = $this->model->get_all($this->table);
            $data['allSliders'] = $allSliders;
            $this->view->render('admin/slider', $data);
        }

        public function delete_slider() {
        $id = $_GET['id'];
        $result = $this->model->delete($id,  $this->table);
        if ($result)
            $this->data['successfully'] = 'اسلایدر مورد نظر با موفقیت حذف گردید.' ;
        else 
            $this->data['errors'] = 'اسلایدر مورد نظر حذف نگردید.' ;

        $this->index();
        }
        
        public function insert_slider()
        {
            unset($this->data['successfully']);
            unset($this->data['errors']);

            $this->view->render('admin/form_insert_slider');
            if(isset($_POST['title']) && ($_POST['title'].trim("")) && isset($_FILES['fileToUpload']['name']) && ($_FILES['fileToUpload']['name'].trim("")))
            {
                $title = $_POST['title'];

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
                            $result = $this->model->insert($title, $pic);
                            
                            if ($result)
                            {
                                echo 'sabt shod';
                                $this->data['successfully'] = 'اسلایدر با موفقیت ثبت شد.' ;
                            }
                            else {
                                echo 'nashod sabt';
                                $this->data['errors'] = 'اسلایدر ثبت نشد';
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
        
        public function update_slider()
        {
            unset($this->data['successfully']);
            unset($this->data['errors']);
            
            if(isset($_GET['id']) && ($_GET['id'].trim(""))){
                $id = $_GET['id'];
                $data['slider'] = $this->model->get_one($this->table,$id);
                $this->view->render("admin/form_update_slider", $data);
            }
            
            if(isset($_POST['title']) && ($_POST['title'].trim("")))
            {
                $id = $_POST['id'];
                $title = $_POST['title'];

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
                                $result = $this->model->update_with_pic($title,$pic,$id);
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
                    $result = $this->model->update_without_pic($title,$id);
                }
                
                if ($result)
                {
                    echo 'ویرایش shod';
                    $this->data['successfully'] = 'اسلایدر با موفقیت ویرایش شد.' ;
                }
                else {
                    echo 'nashod ویرایش';
                    $this->data['errors'] = 'اسلایدر ویرایش نشد';
                }
            }
            else
            {
                echo "لطفا فیلدها را تکمیل کنید.";
            }
        }
}

