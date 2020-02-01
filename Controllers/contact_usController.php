<?php
    class contact_usController extends Controller
    {
        public $data;
        
        function __construct()
        {
            parent::__construct();
        }

        function index()
        {
            $this->view->header();
            $this->view->render('front/contact_us');
            $this->view->footer();
        }

        function insertMessage()
        {
            unset($this->data['successfully']);
            unset($this->data['errors']);

            if(isset($_POST['email']) && isset($_POST['message']) && ($_POST['email'].trim('')) && ($_POST['message'].trim('')))
            {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $title = $_POST['title'];
                $message = $_POST['message'];
                $result = $this->model->insert($name,$email,$title,$message);
                if ($result)
                    $this->data['successfully'] = 'پیام شما ثبت شد.' ;
                else 
                    $this->data['errors'] = 'پیام شما ثبت نشد';
                $this->index();
            } 
            else
            {
                $this->data['errors'] = 'وارد کردن ایمیل و پیام الزامی است.';
                $this->index();
            }
        }
    }