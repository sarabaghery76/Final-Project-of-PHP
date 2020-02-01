<?php
    class news_catadminController extends Controller {
        
        public $table="news_cat";
        
        function __construct() {
            parent::__construct();
        }
        
        
        public function index ()
        {
            $allNews_cat = $this->model->get_all($this->table);
            $data['allNews_cat'] = $allNews_cat;
            $this->view->render('admin/news_cat', $data);
        }    

        public function delete_new_cat()
        {
            $id = $_GET['id'];
            $result = $this->model->delete($id,  $this->table);
            if ($result)
                $this->data['successfully'] = 'دسته بندی مورد نظر با موفقیت حذف گردید.' ;
            else 
                $this->data['errors'] = 'دسته بندی مورد نظر حذف نگردید.' ;

            $this->index();
        }
        
        public function insert_news_cat()
        {
            
            unset($this->data['successfully']);
            unset($this->data['errors']);
            
            $this->view->render('admin/form_insert_new_cat');
            if(isset($_POST['title']) && ($_POST['title'].trim("")))
            {
                $title = $_POST['title'];
                $result = $this->model->insert($title);
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
                echo "لطفا فیلدها را تکمیل کنید.";
            }
        }
        
        public function update_new_cat()
        {
            unset($this->data['successfully']);
            unset($this->data['errors']);

            if(isset($_GET['id']) && ($_GET['id'].trim(""))){
                $id = $_GET['id'];
                $data['new_cat'] = $this->model->get_one($this->table,$id);
                $this->view->render("admin/form_update_new_cat", $data);
            }

            if(isset($_POST['title']) && ($_POST['title'].trim("")))
            {
                $id = $_POST['id'];
                $title = $_POST['title'];

                $result = $this->model->update($title,$id);

                if ($result)
                {
                    echo 'ویرایش shod';
                    $this->data['successfully'] = 'دسته بندی با موفقیت ویرایش شد.' ;
                }
                else {
                    echo 'nashod ویرایش';
                    $this->data['errors'] = 'دسته بندی ویرایش نشد';
                }
            }
            else
            {
                echo "لطفا فیلدها را تکمیل کنید.";
            }
        }
    }
