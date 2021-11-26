<?php 

namespace app\controllers;

use app\core\Request;

class AuthController extends Controller
{

    public function login(Request $reqeust)
    {
        $this->setLayout('auth');
        if($reqeust->isPost()){
            return 'handle submitted data';
        }
        return $this->render('login');
    }

    public function register(Request $reqeust)
    {
        $this->setLayout('auth');
        if($reqeust->isPost()){
            dumping($reqeust->getBody());
            return 'handle submitted data';
        }
        return $this->render('register');
    }
}

?>