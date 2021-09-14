<?php
include_once("model/LoginModel.php");

class LoginController {
    public $loginModel;
    
    public function __construct()
        {
            $this->loginModel = new LoginModel();
        }
    
    public function invoke()
        {
            $res = $this->loginModel->getLogin();

            if ($res == 'loggedIn') 
                {
                    include 'view/Home.php'
                }
            else 
                {
                    include 'view/Login.php'
                }
        }
}

?>