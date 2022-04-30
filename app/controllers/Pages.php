<?php

class Pages extends Controller {
    public function __construct(){
    }

    public  function  index(){
        $data = [
            'title' => 'MVC Project',
            'description' => 'Simple social network built using the MVC Framework',
        ];

        $this->view('pages/index', $data);
    }

    public  function  about(){
        $data = [
            'title' => 'About Us',
            'description' => 'The app is a blog sharing application!',
        ];
        $this->view('pages/about', $data);
    }
}
