<?php
require_once './app/views/login.view.php';

class LoginController {
    private $model;
    private $view;

    public function __construct() {
       $this->view = new LoginView(); 
    }

    function showLogin (){
        $this->view->showLogin();
    }
}