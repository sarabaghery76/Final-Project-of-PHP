<?php
    class messageadminController extends Controller {
        
        public $table = "contact_us";
        
        function __construct() {
            parent::__construct();
        }
    
        function index()
        {
            $allMessages = $this->model->get_all($this->table);
            $data['allMessages'] = $allMessages;
            $this->view->render('admin/message', $data);
        }
    
        public function delete_message() {
            $id = $_GET['id'];
            $result = $this->model->delete($id,  $this->table);
            if ($result)
                $this->data['successfully'] = 'پیام کاربر مورد نظر با موفقیت حذف گردید.' ;
            else 
                $this->data['errors'] = 'پیام کاربر مورد نظر حذف نگردید.' ;

            $this->index();
        }
    
//    public function edit_message () {
//        if(isset($_GET['id'])){
//            $id = $_GET['id'];
//            $data['message'] = ($this->model->get_message($this->table,$id));
//            $this->view->render("admin/messages/form_edit_message_view", $data);
//        }
//        if(isset($_POST['message']))
//        {
//            $message = $_POST['message'];
//            $id = $_POST['id'];
//            echo $this->model->edit($this->table,$id,$message);
//            $this->getMessages();
//        }
//    }
    
    public function update_message()
    {
        unset($this->data['successfully']);
        unset($this->data['errors']);

        if(isset($_GET['id']) && ($_GET['id'].trim(""))){
            $id = $_GET['id'];
            $data['message'] = $this->model->get_one($this->table,$id);
            $this->view->render("admin/form_update_message", $data);
        }

        if(isset($_POST['title']) && ($_POST['title'].trim("")) && isset($_POST['name']) && ($_POST['name'].trim("")) && isset($_POST['message']) && ($_POST['message'].trim("")))
        {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $name = $_POST['name'];
            $message = $_POST['message'];

            $result = $this->model->update($title,$name,$message,$id);

            if ($result)
            {
                echo 'ویرایش shod';
                $this->data['successfully'] = 'پیام کاربر با موفقیت ویرایش شد.' ;
            }
            else {
                echo 'nashod ویرایش';
                $this->data['errors'] = 'پیام کاربر ویرایش نشد';
            }
        }
        else
        {
            echo "لطفا فیلدها را تکمیل کنید.";
        }
    }
}

