<?php

class Users extends Controller {
    public function __construct(){

    }

    public function register(){
        //check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Process the form
        } else {
            //Init Data
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => '',
            ];

            //Load View
            $this->view('users/register', $data);
        }
    }

    public function login(){
        //check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Process the form
        } else {
            //Init Data
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];

            //Load View
            $this->view('users/login', $data);
        }
    }
}
