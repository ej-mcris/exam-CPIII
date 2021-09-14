<?php
    // include_once('model/User.php');

    class LoginModel
    {
        public function getLogin()
        {
            if(isset($_REQUEST['username']) && isset($_REQUEST['password']))
            {
                if($_REQUEST['username'] == 'admin' && $_REQUEST['password'] == 'admin')
                {
                    return 'loggedIn';
                } else {
                    return 'wrong cred';
                }
            }
        }
    }
?>