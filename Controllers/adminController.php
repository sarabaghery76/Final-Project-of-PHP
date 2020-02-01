<?php
  class adminController extends Controller
  {
    function __construct()
    {
        parent::__construct();
    }
    
    private function is_admin()
    {
        if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'])
        {
            return true;
        }
        else {
            return false;
        }
    }

    public function index()
    {
        $data = [];
        if(isset($_SESSION['errors']) && $_SESSION['errors']){
            $data['errors'] = $_SESSION['errors'];
            delete_session('errors');
        }
        
        $this->view->render("admin/auth", $data);
    }
	
    
    
    public function dashboard()
    {
        if ($this->is_admin())
        {
            $this->view->render("admin/dashboard");
        }
        else
        {
            $this->view->render("admin/auth");
        }
        
    }

    public function login(){
        $result = $this->model->login();
        if ($result->num_rows) {
            $_SESSION['is_admin'] = true;
            redirect(BASE_URL . 'admin/dashboard');
        } else {
            $_SESSION['errors'] = 'نام کاربری یا رمز عبور اشتباه است';
            redirect(BASE_URL . 'admin');
        }
    }

	public function logout () {
		delete_session('is_admin');
		redirect(BASE_URL . 'admin');
	}
}