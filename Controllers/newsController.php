<?php
    class newsController extends Controller{
        public function __construct() {
            parent::__construct();
        }
        
        public function insertcomment(){
        
            unset($this->data['successfully']);
            unset($this->data['errors']);
            
            $id = $_POST['id'];
            
            if(isset($_POST['email']) && isset($_POST['message']) && ($_POST['email'].trim('')) && ($_POST['message'].trim('')))
            {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                
                $result = $this->model->insert($name,$email,$message,$id);
                if ($result)
                    $this->data['successfully'] = 'پیام شما ثبت شد.' ;
                else 
                    $this->data['errors'] = 'پیام شما ثبت نشد';
                redirect(BASE_URL."main/single_new?id=".$id , $data);
            } 
            else
            {
                $this->data['errors'] = 'وارد کردن ایمیل و پیام الزامی است.';
                redirect(BASE_URL."main/single_new?id=".$id , $data);
            }
        }
    }
